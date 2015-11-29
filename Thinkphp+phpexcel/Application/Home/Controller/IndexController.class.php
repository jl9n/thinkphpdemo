<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function excelExport() {
//        $list = array(
//            array('id' => '1', 'username' => "87423050@qq.com", 'password' => 'sucaihuo.com'),
//            array('id' => '2', 'username' => '41614@qq.com', 'password' => 'hjl666666'),
//            array('id' => '3', 'username' => 'zhangliao@163.com', 'password' => 'zhangqirui'),
//        );
        $list = M("user")->field("id,username,password")->order("id DESC")->limit(50)->select();
        $title = array('ID', '用户名', '密码'); //设置要导出excel的表头
        exportExcel($list, '素材火', $title);
    }

    public function upload() {
        header("Content-Type:text/html;charset=utf-8");
        $upload = new \Think\Upload(); // 实例化上传类
        $upload->maxSize = 3145728; // 设置附件上传大小
        $upload->exts = array('xls', 'xlsx'); // 设置附件上传类
        $upload->savePath = '/'; // 设置附件上传目录
        // 上传文件
        $info = $upload->uploadOne($_FILES['file']);
        $filename = 'Uploads' . $info['savepath'] . $info['savename'];
        $exts = $info['ext'];
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            $this->goods_import($filename, $exts);
        }
    }

    //导入数据页面
    public function import() {
        $this->display('goods_import');
    }

    //导入数据方法
    protected function goods_import($filename, $exts = 'xls') {
        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        //创建PHPExcel对象，注意，不能少了\
        $PHPExcel = new \PHPExcel();
        //如果excel文件后缀名为.xls，导入这个类

        if ($exts == 'xls') {
            import("Org.Util.PHPExcel.Reader.Excel5");
            $PHPReader = new \PHPExcel_Reader_Excel5();
        } else if ($exts == 'xlsx') {
            import("Org.Util.PHPExcel.Reader.Excel2007");
            $PHPReader = new \PHPExcel_Reader_Excel2007();
        }
        //载入文件
        $PHPExcel = $PHPReader->load($filename);
        //获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
        $currentSheet = $PHPExcel->getSheet(0);
        //获取总列数
        $allColumn = $currentSheet->getHighestColumn();
        //获取总行数
        $allRow = $currentSheet->getHighestRow();
        //循环获取表中的数据，$currentRow表示当前行，从哪行开始读取数据，索引值从0开始
        for ($currentRow = 1; $currentRow <= $allRow; $currentRow++) {
            //从哪列开始，A表示第一列
            for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn++) {
                //数据坐标
                $address = $currentColumn . $currentRow;
                //读取到的数据，保存到数组$arr中
                $data[$currentRow][$currentColumn] = $currentSheet->getCell($address)->getValue();
            }
        }
        $this->save_import($data);
    }

    //保存导入数据
    public function save_import($data) {


        foreach ($data as $k => $v) {
            if ($k > 1) {
                $date['username'] = $v['B'];
                $date['password'] = $v['C'];
                $result = M('user')->add($date);
            }
        }
        if ($result) {
            $num = M('user')->count();
            $this->success('用户导入成功' . '，现在<span style="color:red">' . $num . '</span>条数据了！');
        } else {
            $this->error('用户导入失败');
        }
    }

}

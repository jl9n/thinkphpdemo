<?php
use Think\Controller;
class IndexController extends Controller { 

    // 首页
    public function index() {
        $Form = M("Form");
        // 按照id排序显示前5条记录
        $list = $Form->order('id desc')->limit(3)->select();
        $this->list =   $list;
        $this->display();
    }
	
	public function reg(){
		
	$this->display();
		
	}

    // 检查标题是否可用
    public function checkTitle($title='') {
        if (!empty($title)) {
            $Form = M("Form");
            if ($Form->getByTitle($title)) {
                $this->error('标题已经存在');
            } else {
                $this->success('标题可以使用!');
            }
        } else {
            $this->error('标题必须');
        }
    }
	
	public function verify(){
			
			$config =    array(
			'fontSize'    =>    15,    // 验证码字体大小
			'length'      =>    4,     // 验证码位数
			'useNoise'    =>    false, // 关闭验证码杂点
			 'imageH' => 40,
            'imageW' => 110,
			);
			$Verify =     new \Think\Verify($config);
			$Verify->entry();

		}

    // 处理表单数据
    public function insert() {
			
        $Form = D("User");
        if ($vo = $Form->create()) {
            if (false !== $Form->add()) {
                $vo['create_time'] = date('Y-m-d H:i:s', $vo['create_time']);
                $vo['content'] = nl2br($vo['content']);
				
				//3.2的 ajaxReturn 返回和3.1已经不同，只返回一个 $data
				$data['status'] = 1;
				$data['info'] = '表单数据保存成功！';
				$data['data'] = $vo;
				$this->ajaxReturn($data);
            } else {
                $this->error('数据写入错误！');
            }
        } else {
            $this->error($Form->getError());
        }
    }
}
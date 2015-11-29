<?php
class CateAction extends Action{
	
		function index(){
			$cate=D('cate');
			
			$list=$cate->field("id,name,pid,path,concat(path,'-',id) as bpath")->order('bpath')->select();
			
			foreach($list as $key=>$value){
				$list[$key]['count']=count(explode('-',$value['bpath']));
			}
			

			$this->assign('alist',$list);
			
			$this->display();
		}
		
		function add(){
				$cate=new CateModel();
				if($vo=$cate->create()){
				if($cate->add()){
						$this->success('添加成功');
					}else{
						$this->error('添加栏目失败');
					}

					
				
				}else{
					$this->error($cate->getError());
				}
			
		}
	
	
}


?>
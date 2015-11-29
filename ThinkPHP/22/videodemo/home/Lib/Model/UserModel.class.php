<?php
//切到数据库里面去，先说表结构
class UserModel extends RelationModel{
	protected $_link=array(
	
		'good'=>array(
				'mapping_type'=>HAS_MANY,
				'class_name'=>'good',
				'mapping_name'=>'good',
				'foreign_key'=>'uid',
		
			
				
				
				
				
				
				
				
				
				//condition
				//foreign_key
				//mapping_fields 需要关联的字段
				//as_fields
				//mapping_limit
				//mapping_order
				//parent_key 自引用关联的关联段 parent_id
				
		
		),
		
	
	);
}

?>
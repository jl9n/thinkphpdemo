<?php
class GoodModel extends RelationModel{
	
		protected $_link=array(
					'user'=>array(
							'mapping_type'=>BELONGS_TO,
							'foreign_key'=>'uid',
					
					
					),
						
		
		);
	
	
}

?>
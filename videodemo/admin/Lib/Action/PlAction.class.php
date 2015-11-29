<?php
	
	class PlAction extends Action{
	
		public function  index(){
		
		
			$User=M('xs');
		
		
			$res=$User->query('select *from think_xs');
			
			while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
				
				$id=$row['id'];
			
				$name=$row['name'];
				
				$path="../html/".$id.".txt";
				
				echo $path;
			
				$handle=fopen($path,"w");
				
				fwrite($handle,strip_tags($name));
			
				fclose($handle);
			}
			
			mysql_free_result($res);
				
			mysql_close();
		
		
		
		
		
		
		}
	
	
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	}
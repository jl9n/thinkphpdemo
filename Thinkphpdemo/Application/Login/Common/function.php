<?php	
	 //?����������֤���Ƿ���ȷ��$codeΪ�û��������֤���ַ���
 /* function check_verify($code, $id = '') {
    $verify = new \Think\Verify ();
    return $verify->check ( $code, $id );
 } */
 
	function check_verify($code,$id=''){
		$verify = new \Think\Verify();
		//var_dump($verify);
		//exit;
		return $verify->check($code,$id);
	}
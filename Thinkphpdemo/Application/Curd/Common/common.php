<?php	
	public function console($log='')
{	
	
    switch (empty($log)) {
        case False:
            $out = json_encode($log);
            $GLOBALS['console'] .= 'console.log('.$out.');';
            break;
        
        default:
            echo '<script type="text/javascript">'.$GLOBALS['console'].'</script>';
    }
}
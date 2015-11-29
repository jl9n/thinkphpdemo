<?php
	
	define("PC", 10); // ���̸���
define("TO", 4); // ��ʱ
define("TS", 4); // �¼���ȣ�����ģ��������ʱ
 
if (!function_exists('pcntl_fork')) {
    die("pcntl_fork not existing");
}
 
// �����ܵ�
$sPipePath = "my_pipe.".posix_getpid();
if (!posix_mkfifo($sPipePath, 0666)) {
    die("create pipe {$sPipePath} error");
}
 
// ģ�����񲢷�
for ($i = 0; $i < PC; ++$i ) {
    $nPID = pcntl_fork(); // �����ӽ���
    if ($nPID == 0) {
        // �ӽ��̹���
        sleep(rand(1,TS)); // ģ����ʱ
        $oW = fopen($sPipePath, 'w');
        fwrite($oW, $i."\n"); // ��ǰ��������ȣ��ڹܵ���д������
        fclose($oW);
        exit(0); // ִ������˳�
    }
}
 
// ������
$oR = fopen($sPipePath, 'r');
stream_set_blocking($oR, FALSE); // ���ܵ�����Ϊ�Ƕ�����������Ӧ��ʱ����
$sData = ''; // ��Źܵ��е�����
$nLine = 0;
$nStart = time();
while ($nLine < PC && (time() - $nStart) < TO) {
    $sLine = fread($oR, 1024);
    if (empty($sLine)) {
        continue;   
    }   
     
    echo "current line: {$sLine}\n";
    // ���ڷ���������������ϣ�ͨ����\n����ʶ
    foreach(str_split($sLine) as $c) {
        if ("\n" == $c) {
            ++$nLine;
        }
    }
    $sData .= $sLine;
}
echo "Final line count:$nLine\n";
fclose($oR);
unlink($sPipePath); // ɾ���ܵ����Ѿ�û��������
 
// �ȴ��ӽ���ִ����ϣ����⽩ʬ����
$n = 0;
while ($n < PC) {
    $nStatus = -1;
    $nPID = pcntl_wait($nStatus, WNOHANG);
    if ($nPID > 0) {
        echo "{$nPID} exit\n";
        ++$n;
    }
}
 
// ��֤�������Ҫ�鿴������Ƿ�ÿ�����������
$arr2 = array();
foreach(explode("\n", $sData) as $i) {// trim all
    if (is_numeric(trim($i))) {
        array_push($arr2, $i);  
    }
}
$arr2 = array_unique($arr2);
if ( count($arr2) == PC) {  
    echo 'ok'; 
} else {
    echo  "error count " . count($arr2) . "\n";
    var_dump($arr2);
}
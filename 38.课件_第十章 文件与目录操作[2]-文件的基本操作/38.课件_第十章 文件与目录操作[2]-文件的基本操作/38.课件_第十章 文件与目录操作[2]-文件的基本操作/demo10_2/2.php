<?php 
header('Content-type:text/html;charset=utf-8');
$file=fopen('test.txt','a+');
if(flock($file,LOCK_EX)){
	sleep(10);
	var_dump(fwrite($file,'我是2.php文件写的！'));
	flock($file,LOCK_UN);
}else{
	echo '文件加锁失败！';
}

?>
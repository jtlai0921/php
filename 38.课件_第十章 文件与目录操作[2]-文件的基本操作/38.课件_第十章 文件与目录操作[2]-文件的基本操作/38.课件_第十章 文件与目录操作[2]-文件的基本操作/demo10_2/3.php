<?php 
header('Content-type:text/html;charset=utf-8');
$file=fopen('test.txt','a+');
if(flock($file,LOCK_EX+LOCK_NB)){//不希望在加锁的时候发生堵塞
	var_dump(fwrite($file,'我是3.php文件写的！'));
	flock($file,LOCK_UN);
}else{
	echo '文件加锁失败！';
}
fclose($file);
?>
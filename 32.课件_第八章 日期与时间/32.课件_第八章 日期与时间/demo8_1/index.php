<?php
date_default_timezone_set('Asia/Shanghai');//设置时区
$startTime=microtime(true);
for ($i=0;$i<10000000;$i++){
	
}
$endTime=microtime(true);
echo '该for循环花费了'.round(($endTime-$startTime),4).'秒';
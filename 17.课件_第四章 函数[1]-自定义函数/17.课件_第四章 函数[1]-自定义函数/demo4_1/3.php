<?php 
function add($a,$b){
	return $a+$b;//返回值给调用的地方，结束这个函数的运行!
}
$i=add(10,20)*10;
echo $i;
?>
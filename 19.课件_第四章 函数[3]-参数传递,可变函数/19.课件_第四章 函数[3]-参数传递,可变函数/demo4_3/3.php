<?php 
/*
 * 函数参数的默认值
 * */
/*
function test($a=10){//参数的默认值
	echo ++$a;
}
test(20);
*/
function test($a,$b=20,$c=30){
	echo $a+$b;
}
test(25,20);
?>
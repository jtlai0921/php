<?php
/*
 * 全局变量
 * */
$i=10;//全局变量（外部变量）
define('MY_NAME','孙胜利');
function test(){
	echo MY_NAME;
	global $i;//声明$i为全局变量,然后再这个函数内部就可以使用$i
	echo $i;
	$a=1;
}
test();
?>
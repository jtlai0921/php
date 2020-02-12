<?php 
/*
 * 静态变量
 * */
function test(){
	static $a=10;//静态变量$a,初始化静态变量,尽在第一次调用的时候执行
	echo ++$a;//当第二次执行这个函数的时候$a这个变量依然存在并且里面的也值依然存在！
}
test();
echo '<br />';
test();
echo '<br />';
test();
echo '<br />';
test();
echo '<br />';
test();
echo '<br />';
test();
echo '<br />';
test();
?>
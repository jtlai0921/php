<?php 
function add($a,$b){//形式参数，就是一个形式，因为他们里面并没有具体的值！
	echo $a+$b;
}
add(10,20);
$i=100;
add($i,20);
?>
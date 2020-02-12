<?php 
/*
 * 按引用传递参数
 * */
function test(&$a){
	echo ++$a;
}
$i=10;
test($i);
echo '<br />'.$i;
?>
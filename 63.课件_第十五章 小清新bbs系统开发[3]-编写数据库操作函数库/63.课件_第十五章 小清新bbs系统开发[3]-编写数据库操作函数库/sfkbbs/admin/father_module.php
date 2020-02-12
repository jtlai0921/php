<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';

$link=connect();

$query='select count(*) from sfk_father_module';
execute($link, $query);
close($link);//为什么会关闭成功,因为在PHP中，向函数里面传对象类型的变量的时候就是按引用传，就是传递的这个变量本身,而不像其类型的变量，是把值复制一份传进去
/*
function a($i){
	$i=$i+10;
	echo $i.'<br />';
}
$i=2;
a($i);
echo $i;
以上是常见情况,但是有一种特殊情况：就是对象类型的变量
在我们的PHP里面如果向函数里面传递的是对象，那么并不是把对象复制一份传给函数，而是直接传递的这个对象本身
向函数里面传递对象类型的变量的时候，其实你这么理解就OK了：传递的就是那个变量本身
向函数里传递对象，类似于：
function a(&$i){
	$i=$i+10;
	echo $i.'<br />';
}
$i=2;
a($i);
echo $i;
*/
?>
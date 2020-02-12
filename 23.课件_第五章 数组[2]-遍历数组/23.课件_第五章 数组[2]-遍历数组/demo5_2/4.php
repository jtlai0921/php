<?php 
/*
 * 有规律，我们可以直接foreach嵌套去遍历就可以了
 * */
$arr=array(
	array('a','b','c','d'),
	array('a','b','c','d','e','f'),
	array('a','b','c','d','f'),
	array('a','b','c','d'),
);
foreach ($arr as $val1){
	foreach ($val1 as $val2){
		echo $val2.'<br />';
	}
}
?>
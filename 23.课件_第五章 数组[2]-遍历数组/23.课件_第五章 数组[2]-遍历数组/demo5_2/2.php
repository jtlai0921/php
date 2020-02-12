<?php 
/*
 * foreach来遍历我们的数组
 * 这个比较常用，因为是专门为我们来遍历数组的!
 * */
$arr1=array(
		'name'=>'孙胜利',
		'num'=>10
);
/*
foreach($arr1 as $value){
	echo $value.'<br />';
}
*/
foreach($arr1 as $key=>$value){
	echo $key.'=>'.$value.'<br />';
}
?>
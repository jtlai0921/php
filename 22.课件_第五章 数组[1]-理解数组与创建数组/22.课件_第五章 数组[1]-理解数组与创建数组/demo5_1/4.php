<?php 
//二维数组,多维数组
$students=array(
	0=>array(1,'孙胜利',true,60.5),
	1=>array(2,'李雷',true,80.5),
	2=>array(3,'韩梅梅',false,85.5)
);
/*
$students=array(
		array(1,'孙胜利',true,60.5),
		array(2,'李雷',true,80.5),
		array(3,'韩梅梅',false,85.5)
);
*/

var_dump($students);
echo $students[0][1];
?>
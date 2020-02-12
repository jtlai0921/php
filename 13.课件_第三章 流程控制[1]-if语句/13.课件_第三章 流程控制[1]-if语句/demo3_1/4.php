<?php 
/*
 if语句-多向条件
*/
$a=84;
$grade1=60;//低于60不及格
$grade2=75;//及格
$grade3=85;//良好
if($a<$grade1){
	echo '不及格';
}elseif($a<$grade2){
	echo '童鞋你及格了';
}elseif($a<$grade3){
	echo '良好！';
}else{
	echo '优秀';
}
?>
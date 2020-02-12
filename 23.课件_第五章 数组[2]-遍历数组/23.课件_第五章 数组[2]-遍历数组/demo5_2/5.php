<?php
/*
 * 总结的案例
 * */
$students=array(
	array('孙胜利',1,true,60.5),
	array('李雷',2,true,80.5),
	array('韩梅梅',3,false,85.5)
);
echo '<table border=1>';
foreach ($students as $val){
	if($val[2]===true){
		$val[2]='男';
	}else{
		$val[2]='女';
	}
	echo "<tr><td>{$val[0]}</td><td>{$val[1]}</td><td>{$val[2]}</td><td>{$val[3]}</td></tr>";
}
echo '</table>';
?>
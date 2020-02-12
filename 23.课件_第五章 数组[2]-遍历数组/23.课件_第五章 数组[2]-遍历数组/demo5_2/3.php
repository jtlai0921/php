<?php
/*
 * 以后遇到这种情况，咱们到时候再说 - 递归思想的解决
 * */
$arr=array(
		'a',
		'b',
		'c',
		'd',
		array(
			1,2,3,4,5
		)
);
foreach ($arr as $val){
	var_dump($val);
}
?>
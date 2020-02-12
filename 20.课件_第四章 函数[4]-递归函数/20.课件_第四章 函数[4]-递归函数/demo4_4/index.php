<?php
function test($n){
	echo $n.'&nbsp;';
	if($n>0){
		test($n-1);//自己内部调用自己，即 递归函数
	}else{
		echo '<-->';
	}
	echo $n.'&nbsp;';
}
test(3);
/*
 * 死循环了，所以在使用递归的时候要注意避免这种情况！
function test($n){
	echo $n.'&nbsp;';
	test($n-1);
}
test(3);
*/
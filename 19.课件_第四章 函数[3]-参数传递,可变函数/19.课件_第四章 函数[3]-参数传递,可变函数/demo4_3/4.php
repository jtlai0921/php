<?php 
/*
 * 可变长度参数列表
 * */
function test(){
	//var_dump(func_get_args());//然后做一些其他的操作
	//var_dump(func_get_arg(4));//调用这个函数的时候可以传入一个值表示获取第几个实际参数（重0开始）
	//var_dump(func_num_args());//返回传入所在自定义函数的参数的个数！
}
test(21,323232,4343,'单位取得完全','dwqdwqdqw');
?>
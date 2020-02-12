<?php
/*
 使用for循环可以遍历数组 
*/
/*
count(数组[,1])返回数组里面数据的个数,还可以获取多维数组的个数 ,当然一般我们只传一个数组进去就可以了
$arr1=array(
		array(1,2,3),
		array(4,5,6)
);
echo count($arr1,1);//2+6=8
*/
$arr=array(
	'a','b','c','d','e','f'
);
for($i=0;$i<count($arr);$i++){
	echo $arr[$i];
}

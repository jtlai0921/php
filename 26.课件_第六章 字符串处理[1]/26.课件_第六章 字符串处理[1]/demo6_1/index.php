<?php
/*
$str='    abc   ';
var_dump($str);
var_dump(trim($str));


$str='abcabcdefac';
var_dump($str);
var_dump(trim($str,'bac'));

$str='    abc   ';
var_dump($str);
var_dump(ltrim($str));
var_dump($str);
*/
/*
$str='test';
var_dump($str);
$str1=strtoupper($str);
var_dump($str);


$str='TeSt';
var_dump($str);
var_dump(strtolower($str));
var_dump($str);
*/
/*
$str='testteste';
var_dump(substr_count($str,'te'));

$text2 = 'gcdgcdgcd';
echo substr_count($text2, 'gcdgcd');

$str='testteste';
var_dump(substr_count($str,'te',1,8));//不能超出字符串
*/
/*
$str='testteste';
var_dump(strpos($str, 't1'));
if(strpos($str, 't')===false){
	echo '没找到！';
}else{
	echo '找到啦!';
}

$str='testteste';
var_dump(strpos($str, 't',1));
*/
/*
$str='testteste';
var_dump($str);
var_dump(strstr($str,'s'));
var_dump(strstr($str,'s',true));
*/
/*
$str='testteste';
var_dump($str);
var_dump(str_replace('t','T',$str));
*/
/*
$str='abc123abc';
var_dump($str);
$str1=str_replace(array('1','2','3'),array('一','二','三'),$str,$count);
echo $count;
var_dump($str1);
*/
$str=array(
		'abc123abc',
		'123abcabc',
		'abcab123c'
);
var_dump($str);
$str1=str_replace(array('1','2','3'),array('一','二','三'),$str,$count);
echo $count;
var_dump($str1);












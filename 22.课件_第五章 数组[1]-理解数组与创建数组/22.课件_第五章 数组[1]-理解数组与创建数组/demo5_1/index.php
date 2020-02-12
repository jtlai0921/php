<?php
/*
创建数组方法一
*/
//$student[索引值]=具体的值
$student[0]=10;
$student[1]='孙胜利';
$student[2]=true;
$student[3]=60.5;
$student[3]='单位取得完全';

//需要使用print_r()函数来输出数组的具体内容
//print_r($student);
var_dump($student);

$student1['num']=10;
$student1['name']='孙胜利';
$student1['sex']=true;
$student1['grade']=60.5;
var_dump($student1);

//使用数组里面具体数据的方法 
//数组变量名称[索引值];
echo $student[1];
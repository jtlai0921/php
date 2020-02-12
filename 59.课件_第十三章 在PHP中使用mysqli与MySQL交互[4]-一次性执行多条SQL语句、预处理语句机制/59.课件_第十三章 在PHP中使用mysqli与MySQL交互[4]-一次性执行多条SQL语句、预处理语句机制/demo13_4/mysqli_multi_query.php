<?php
header('Content-type:text/html;charset=utf-8');
$host='localhost';
$user='root';
$password='123456';
$database='';
$port='3306';
//建立到数据库的连接
$link=@mysqli_connect($host, $user, $password,$database,$port);
if(mysqli_connect_errno()){
	exit(mysqli_connect_error());
}
//设置 客户端，连接层，返回结果字符集
mysqli_set_charset($link,'utf8');



//要一次性执行的sql语句，一条一条的放在数组$query_arr里面，每条语句结尾不需要;（程序会自动添加）
$query_arr[]='drop database if exists sifangku';
$query_arr[]='create database sifangku character set utf8 collate utf8_general_ci';
$query_arr[]='use sifangku';
$query_arr[]="show variables like 'character_set_%'";
$query_arr[]='create table t1(id int unsigned auto_increment primary key,name char(36))';
$query_arr[]='insert into t1(name) values("孙胜利")';
$query_arr[]='insert into t1(name) values("私房库")';
$query_arr[]='insert into t1(name) values("sifangku.com")';
$query_arr[]='select * from t1';


$query=implode(';',$query_arr).';';
var_dump($query_arr);
//var_dump($query);


/*
解释：
	对于mysqli_multi_query()函数
		可以使用mysqli_store_result()传输一条语句的结果集
		而后使用mysqli_next_result()准备下一条语句的结果集
		循环执行即可获取出全部的结果集，还可以顺带判断是否有语句出错（如果遇到出错的语句就会停止，这时正好可以使用mysqli_error()函数输出错误）！
*/
if(mysqli_multi_query($link, $query)){
	$i=0;//计数
	do {
		if($result=mysqli_store_result($link)){
			echo "<div style='color:green;font-weight:bold;'>==========下标为{$i}的语句结果集：==========</div>";
			var_dump(mysqli_fetch_all($result));
			mysqli_free_result($result);
 		}else{
 			echo "==========下标为{$i}的语句无结果集==========<br />";
 		}
 		$i++;
 		//如果没有更多的结果集，跳出整个循环
 		if(!mysqli_more_results($link)) break;
	}while (mysqli_next_result($link));
	//判断是否有误
	if($i==count($query_arr)){
		echo "<div style='color:green;'>SQL语句全部执行成功！</div>";
	}else{
		echo "SQL语句执行失败：<br />&nbsp;数组下标为{$i}的语句:{$query_arr[$i]}执行错误<br />&nbsp;错误原因：".mysqli_error($link);
	}
}else{
	echo '执行失败！请检查首条语句是否正确！<br />可能的错误原因：'.mysqli_error($link);
}
//关闭打开的数据库连接
@mysqli_close($link) or exit('数据库连接关闭失败');
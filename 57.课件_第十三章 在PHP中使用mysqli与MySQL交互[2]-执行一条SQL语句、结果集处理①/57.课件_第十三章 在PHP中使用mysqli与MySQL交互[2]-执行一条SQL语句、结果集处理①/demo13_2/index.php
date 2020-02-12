<?php
header('Content-type:text/html;charset=utf-8');
//与MySQL数据库建立连接
$link=mysqli_connect('localhost','root','123456','',3306);
//连接错误时的提示
if(mysqli_connect_errno()){
	exit(mysqli_connect_error());
}
//设置默认字符编码
mysqli_set_charset($link, 'utf8');
//选择特定的数据库
mysqli_select_db($link,'d14');



//对数据库执行一条SQL语句
//$query='insert into t1(info) values("孙胜利，私房库，sifangku.com")';
$query='select * from t1';
$result=mysqli_query($link, $query);


/*
//以索引数组的方式获取一条记录的数据
while ($data=mysqli_fetch_row($result)){
	var_dump($data);
}
*/


/*
以关联数组的方式获取一条记录的数据
var_dump(mysqli_fetch_assoc($result));
var_dump(mysqli_fetch_assoc($result));
var_dump(mysqli_fetch_assoc($result));
var_dump(mysqli_fetch_assoc($result));
var_dump(mysqli_fetch_assoc($result));
*/


/*
以索引数组或关联数组的方式获取一条记录的数据
第二个参数可选值：MYSQLI_ASSOC, MYSQLI_NUM, MYSQLI_BOTH(默认)
var_dump(mysqli_fetch_array($result,MYSQLI_NUM));
*/


/*
以索引数组或关联数组的方式获取全部记录的数据
第二个参数可选值：MYSQLI_ASSOC, MYSQLI_NUM, MYSQLI_BOTH
var_dump(mysqli_fetch_all($result,MYSQLI_BOTH));
*/


/*
返回结果集中的下一个字段信息
$filed=mysqli_fetch_field($result);
var_dump($filed);
echo $filed->orgname;
//重复使用获取下一个字段
var_dump(mysqli_fetch_field($result));
var_dump(mysqli_fetch_field($result));
*/


/*
返回一个代表结果集字段的对象数组
var_dump(mysqli_fetch_fields($result));
$fields=mysqli_fetch_fields($result);
echo $fields[0]->name;
*/


/*
//获取结果中行的数量
var_dump(mysqli_num_rows($result));
*/

//释放与一个结果集相关的内存
mysqli_free_result($result);
//关闭与mysql服务器的连接
mysqli_close($link);
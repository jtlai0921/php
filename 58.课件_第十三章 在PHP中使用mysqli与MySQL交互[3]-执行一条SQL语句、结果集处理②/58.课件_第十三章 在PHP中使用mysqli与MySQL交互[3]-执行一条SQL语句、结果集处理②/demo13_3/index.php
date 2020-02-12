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


/*
//对数据库执行一条SQL语句,第三个参数决定了取具体结果的方式,MYSQLI_USE_RESULT,MYSQLI_STORE_RESULT(默认,常用)
$query='select * from t1';
$result=mysqli_query($link, $query,MYSQLI_USE_RESULT);
var_dump(mysqli_fetch_row($result));
//释放与一个结果集相关的内存
mysqli_free_result($result);
*/

/*
//如果使用MYSQLI_USE_RESULT模式则必须在获取完所有的结果才可使用该函数。
$query='select * from t1';
$result=mysqli_query($link, $query,MYSQLI_USE_RESULT);

var_dump(mysqli_fetch_row($result));
var_dump(mysqli_fetch_row($result));
var_dump(mysqli_fetch_row($result));
var_dump(mysqli_fetch_row($result));
var_dump(mysqli_fetch_row($result));

var_dump(mysqli_num_rows($result));

//释放与一个结果集相关的内存
mysqli_free_result($result);
*/


/*
//mysqli_real_query(),适用于只需要返回布尔值，判断有没有执行成功的需求
$query='select * from t1';
if(mysqli_real_query($link, $query)){
	//获取结果集对象
	$result=mysqli_store_result($link);
	var_dump(mysqli_fetch_row($result));
	var_dump(mysqli_fetch_row($result));
	var_dump(mysqli_fetch_row($result));
}
*/


/*
//如果在执行SQL语句的时候发生错误，以上两个函数都将返回false，并且可以使用以下函数处理错误原因
$query='insert into t2(info) values("孙胜利")';
if(!mysqli_query($link,$query)){
	//错误代号
	var_dump(mysqli_errno($link));
	//具体的错误原因
	var_dump(mysqli_error($link));
}
//你也可以这么写:
if(mysqli_query($link,$query)){
	//各种需要的操作..
}else{
	//错误代号
	var_dump(mysqli_errno($link));
	//具体的错误原因
	var_dump(mysqli_error($link));
}
*/

/*
//获取前一个Mysql操作的受影响行数
$query='update t1 set info="私房库" where id=7';
if(mysqli_query($link,$query)){
	var_dump(mysqli_affected_rows($link));
}else{
	//错误代号
	var_dump(mysqli_errno($link));
	//具体的错误原因
	var_dump(mysqli_error($link));
}
*/

/*
//返回最后一次操作自动生成并使用的id
$query='insert into t1(info) values("sifangku.com")';
if(mysqli_query($link,$query)){
	var_dump(mysqli_insert_id($link));
}else{
	//错误代号
	var_dump(mysqli_errno($link));
	//具体的错误原因
	var_dump(mysqli_error($link));
}
*/

/*
//转义用于SQL语句中的特殊字符防止SQL语句出错
//转义的主要目的是方式插入到数据库中的数据中包含某些特殊的字符,造成SQL语句出现语法错误，为了我们的数据能够顺利的入库
$str=<<<STRING
dwqdqwdqwddwq''' "" ;;'dwq'd'wq'dwq'dwq": ::;;;'' ''''  """"" ''''单位取得完全
STRING;
$str=mysqli_real_escape_string($link, $str);
$query="insert into t1(info) values('{$str}')";

if(mysqli_query($link,$query)){
	var_dump(mysqli_insert_id($link));
}else{
	//错误代号
	var_dump(mysqli_errno($link));
	//具体的错误原因
	var_dump(mysqli_error($link));
}
*/


//关闭与mysql服务器的连接
mysqli_close($link);
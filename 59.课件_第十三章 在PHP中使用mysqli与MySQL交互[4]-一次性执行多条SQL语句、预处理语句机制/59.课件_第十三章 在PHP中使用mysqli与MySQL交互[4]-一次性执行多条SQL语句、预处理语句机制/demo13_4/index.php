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
一次性执行多条SQL语句,多个SQL语句用分号隔开	
$query='insert into t1(info) values("孙胜利");insert into t1(info) values("私房库");insert into t1(info) values("sifangku.com");';
var_dump(mysqli_multi_query($link, $query));
*/




/*
//预处理语句机制
//准备的sql语句里面使用占位符号?，来代表要改变的参数
$query='insert into t1(info) values(?)';
//准备要执行的SQL语句
$stmt=mysqli_prepare($link, $query);

//为?绑定变量
mysqli_stmt_bind_param($stmt,'s',$val1);

$val1="行不行呢？";
//执行准备好的SQL语句
var_dump(mysqli_stmt_execute($stmt));


$val1="行重庆带我去的武器大全我？";
//执行准备好的SQL语句
var_dump(mysqli_stmt_execute($stmt));


$val1="单位确定为取得完全";
//执行准备好的SQL语句
var_dump(mysqli_stmt_execute($stmt));


$val1="啊啊啊啊啊啊啊啊啊啊啊啊";
//执行准备好的SQL语句
var_dump(mysqli_stmt_execute($stmt));


$val1="重复的我的武器大全我地区我";
//执行准备好的SQL语句
var_dump(mysqli_stmt_execute($stmt));
*/


/*
//演示获取结果
$query='select * from t1 where id=? or id=?';
$stmt=mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt,'ii',$val1,$val2);

$val1=1;
$val2=2;
if(mysqli_stmt_execute($stmt)){
	mysqli_stmt_bind_result($stmt,$id,$info);
	while(mysqli_stmt_fetch($stmt)){
		echo "{$id}->{$info}<br />";
	}
}
*/



/*
//演示获取结果
$query='select * from t1 where id<?';
$stmt=mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt,'i',$val1);

$val1=3;
if(mysqli_stmt_execute($stmt)){
	mysqli_stmt_bind_result($stmt,$id,$info);
	while(mysqli_stmt_fetch($stmt)){
		echo "{$id}->{$info}<br />";
	}
}

$val1=5;
if(mysqli_stmt_execute($stmt)){
	mysqli_stmt_bind_result($stmt,$id,$info);
	while(mysqli_stmt_fetch($stmt)){
		echo "{$id}->{$info}<br />";
	}
}

$val1=6;
if(mysqli_stmt_execute($stmt)){
	mysqli_stmt_bind_result($stmt,$id,$info);
	while(mysqli_stmt_fetch($stmt)){
		echo "{$id}->{$info}<br />";
	}
}
*/

/*
//从一个prepared语句返回结果集元数据，配合相关函数，可以用来获得字段的相关信息
$query='select * from t1 where id=? or id=?';
$stmt=mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt,'ii',$val1,$val2);

$val1=1;
$val2=2;
if(mysqli_stmt_execute($stmt)){
	$result=mysqli_stmt_result_metadata($stmt);
	var_dump(mysqli_fetch_fields($result));
}
*/


/*
//结果集中的行数,就需要mysqli_stmt_store_result ( mysqli_stmt $stmt );使用这个函数
$query='select * from t1 where id<?';
$stmt=mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt,'i',$val1);

$val1=10;
if(mysqli_stmt_execute($stmt)){
	var_dump(mysqli_stmt_store_result($stmt));
	var_dump(mysqli_stmt_num_rows($stmt));//获取行数之前需要,mysqli_stmt_store_result ( mysqli_stmt $stmt )
}
*/

/*
//释放给定语句处理存储的结果集所占内存
mysqli_stmt_free_result($stmt);
*/


/*
//关闭一个prepared语句,关闭之后就不能在使用了
$query='select * from t1 where id<?';
$stmt=mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt,'i',$val1);

$val1=10;
if(mysqli_stmt_execute($stmt)){
	//...
}


$val1=11;
if(mysqli_stmt_execute($stmt)){
	//...
}

$val1=12;
if(mysqli_stmt_execute($stmt)){
	//...
}
//关闭一个prepared语句
mysqli_stmt_close($stmt);
*/







//关闭与mysql服务器的连接
mysqli_close($link);
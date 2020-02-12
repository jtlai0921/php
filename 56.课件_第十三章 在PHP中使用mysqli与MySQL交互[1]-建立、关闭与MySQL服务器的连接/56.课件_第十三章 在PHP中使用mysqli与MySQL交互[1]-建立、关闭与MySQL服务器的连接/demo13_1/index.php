<?php
header('Content-type:text/html;charset=utf-8');
//与MySQL数据库建立连接
$link=@mysqli_connect('localhost','root','123456','',3306);
//连接错误时的提示
if(mysqli_connect_errno()){
	exit(mysqli_connect_error());
}
//设置默认字符编码
mysqli_set_charset($link, 'utf8');
//选择特定的数据库
mysqli_select_db($link,'d2');


//做各种操作!






//关闭与mysql服务器的连接
mysqli_close($link);
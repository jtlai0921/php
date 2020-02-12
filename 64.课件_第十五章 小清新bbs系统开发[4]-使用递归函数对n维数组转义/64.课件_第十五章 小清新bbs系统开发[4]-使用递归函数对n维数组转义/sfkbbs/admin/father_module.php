<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';

$link=connect();


$a=<<<START
dw'qd'wq"dqw"dwq''dwq
START;
$b=<<<START
dwedwe"fw''ef"ewfwefwefwe
START;
$c=<<<START
dwdqw";fewfe'gregrtdqwdwqdwqq
START;
$d=<<<START
dw'qfewf'erththytjyjyt''dwq
START;
/*
$data=array(
	0=>$a,
	1=>$b,
	2=>$c,
	3=>$d
);
*/
//下面这个$data就是我们画图理解的传入的$data
/*
$data=array(
	0=>$a,
	1=>array(0=>$b,1=>$c)
);
*/
$data=array(
		0=>$a,
		1=>array(0=>$b,1=>$c),
		2=>'2222"222',
		3=>"33'333'33",
		4=>array(
			0=>'4_0"',
			1=>'4_1"',
			2=>'4_2""',
			3=>array('3__"_','3_dwqdwqd"wq')
		)
);
//var_dump($data);
var_dump(escape($link,$data));



?>
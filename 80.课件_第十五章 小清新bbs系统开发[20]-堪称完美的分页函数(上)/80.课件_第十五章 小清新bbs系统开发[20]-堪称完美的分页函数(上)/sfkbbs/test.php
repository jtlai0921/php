<?php 
header("Content-type:text/html;charset=utf-8");
function page($count,$page_size,$page){
	if(!isset($_GET[$page]) || !is_numeric($_GET[$page]) || $_GET[$page]<1){
		$_GET[$page]=1;
	}
	//总页数
	$page_num_all=ceil($count/$page_size);
	if($_GET[$page]>$page_num_all){
		$_GET[$page]=$page_num_all;
	}
	$start=($_GET[$page]-1)*$page_size;
	$limit="limit {$start},{$page_size}";
	echo $_GET[$page];
	$data=array(
		'limit'=>$limit,
		'html'=>'计算出的html代码'
	);
	return $data;
}
var_dump(page(100,10,'page'));
?>
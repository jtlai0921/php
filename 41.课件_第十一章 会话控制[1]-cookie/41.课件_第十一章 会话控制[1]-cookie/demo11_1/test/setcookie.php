<?php 
//参数随机id
$id=uniqid(rand(1000, 9999).'_');
var_dump(setcookie('id',$id,time()+3600));
?>
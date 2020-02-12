<?php 
header('Content-type:text/html;charset=utf-8');
//var_dump(file_get_contents('http://baidu.com'));
file_put_contents('test.txt',file_get_contents('http://sifangku.com'));
?>
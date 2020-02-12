<?php
header('Content-type:text/html;charset=utf-8');
$file=fopen('test.txt','r');
var_dump(fread($file,3));
<?php
header('Content-type:text/html;charset=utf-8');
include_once dirname(__FILE__).'/a.php';//inculde后面一个空格然后接上一个字符串，字符串里面是要包含进来并且执行的那个php文件的路径
include_once dirname(__FILE__).'/a.php';
a('孙胜利');

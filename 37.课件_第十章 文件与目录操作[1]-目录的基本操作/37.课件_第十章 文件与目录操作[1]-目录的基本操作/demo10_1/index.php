<?php
date_default_timezone_set('Asia/Shanghai');
$dir=opendir('../demo9_4');
var_dump(readdir($dir));
var_dump(readdir($dir));
var_dump(readdir($dir));
rewinddir($dir);//倒回目录句柄
var_dump(readdir($dir));
closedir($dir);
// var_dump(readdir($dir));
// var_dump(readdir($dir));
// var_dump(readdir($dir));
// var_dump(readdir($dir));
// var_dump(readdir($dir));
// var_dump(readdir($dir));
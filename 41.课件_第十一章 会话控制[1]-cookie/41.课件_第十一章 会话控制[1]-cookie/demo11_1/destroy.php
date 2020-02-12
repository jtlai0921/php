<?php 
foreach ($_COOKIE['member'] as $key=>$val){
	var_dump(setcookie("member[{$key}]",'',time()-3600));
}
?>
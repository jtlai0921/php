<?php 
session_start();//打开要销毁的会话！
session_unset();//Free all session variables
session_destroy();//销毁一个会话中的全部数据
setcookie(session_name(),'',time()-3600,'/');//销毁保存在客户端的卡号（session id）
?>
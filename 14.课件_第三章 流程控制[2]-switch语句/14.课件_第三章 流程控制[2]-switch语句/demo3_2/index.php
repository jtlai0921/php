<?php
$a=2;
switch ($a){
	case 1://case相当于==
		echo '今天星期一<br />';
		break;
	case 2:
		echo '今天星期二<br />';
		break;
	case 3:
		echo '今天星期三<br />';
		break;
	case 4:
		echo '今天星期四<br />';
		break;//跳出,打断的意思!
	case 5:
		echo '今天星期五<br />';
		break;
	case 6:
		echo '今天星期六<br />';
		break;
	case 7:
		echo '今天星期日<br />';
		break;
	default:
		echo '数字没匹配上，不知道今天是星期几!<br />';
}
echo '执行完毕！';
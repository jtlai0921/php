<?php
header('Content-type:text/html;charset=utf-8');
if(isset($_POST['submit'])){
	if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
		$arr=pathinfo($_FILES['myfile']['name']);
		$newName=date('YmdGis').rand(1000,9999);
		if(move_uploaded_file($_FILES['myfile']['tmp_name'],"uploads/{$newName}.{$arr['extension']}")){
			echo '恭喜你！上传成功！';
		}else{
			echo '对不起移动文件失败！';
		}
	}else{
		exit('可能有攻击，请你做合法的事情！');
	}
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>上传页面</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="myfile" />
	<input type="submit" name="submit" value="开始上传" />
</form>
</body>
</html>
<?php 
function upload($custom_upload_max_filesize){
	$return_data=array();
	//获取phpini配置文件里面的upload_max_filesize值
	$phpini=ini_get('upload_max_filesize');
	//获取phpini配置文件里面的upload_max_filesize值的单位
	$phpini_unit=strtoupper(substr($phpini,-1));
	//获取phpini配置文件里面的upload_max_filesize值的数字部分
	$phpini_number=substr($phpini,0,-1);
	//计算出转换成字节应该乘以的倍数
	$phpini_multiple=get_multiple($phpini_unit);
	//转换成字节
	$phpini_bytes=$phpini_number*$phpini_multiple;
	
	$custom_unit=strtoupper(substr($custom_upload_max_filesize,-1));
	$custom_number=substr($custom_upload_max_filesize,0,-1);
	$custom_multiple=get_multiple($custom_unit);
	$custom_bytes=$custom_number*$custom_multiple;
	
	if($custom_bytes>$phpini_bytes){
		$return_data['error']='传入的$custom_upload_max_filesize大于PHP配置文件里面的'.$phpini;
		$return_data['return']=false;
		return $return_data;
	}
	$return_data['return']=true;
	return $return_data;
}
function get_multiple($unit){
	switch ($unit){
		case 'K':
			$multiple=1024;
			return $multiple;
		case 'M':
			$multiple=1024*1024;
			return $multiple;
		case 'G':
			$multiple=1024*1024*1024;
			return $multiple;
		default:
			return false;
	}
}
header("Content-type:text/html;charset=utf-8");
$upload=upload('1K');
if(!$upload['return']){
	var_dump($upload['error']);
}
?>
<?php
 header("Content-type: text/html; charset=utf-8"); 

 $con = mysql_connect("localhost","root","root");
 if(!$con) {
 	die("无法连接数据库");
 }
 mysql_query("set names utf8");
 mysql_select_db('blog');


/*判断恶意攻击*/
function gongji($id){
 	if($id==""){
		return false;
	} 	

	$result = mysql_query("select * from massage where id = '$id'");
	$num = mysql_num_rows($result); //获取符合条件的记录数 mysql_fetch_array
	if($num==0) {
		return false;
	}

	return true;
 }

function tiaozhuan($url, $msg="操作已经完成，请等待3秒钟") {
	echo $msg;
	echo"<meta http-equiv=refresh content=3;url='".$url."'> ";
}

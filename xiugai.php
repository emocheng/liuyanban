<?php
require_once("config.php");
$id = $_GET['id'];

$result = mysql_query("select * from massage where id='$id'");
$row = mysql_fetch_array($result);
if($_POST){
	$user=$_POST["user"];
	$massage=$_POST["massage"];
	mysql_query("update massage set massage='$massage',user='$user' where id=$id");
	tiaozhuan("http://127.0.0.1/liuyanban/index.php","恭喜您修改成功！");
	return;
}

require_once("xiugai.html");

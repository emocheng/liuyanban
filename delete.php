<?php
require_once("config.php");
$id = isset($_GET["id"]) ? $_GET["id"] : "";

/*判断恶意攻击*/
if(!gongji($id)){
	exit("请不要恶意攻击网站!");
}


mysql_query("delete from massage where id=$id");
tiaozhuan("http://127.0.0.1/liuyanban/index.php","恭喜您删除成功！！！！！");


/*
	查询记录数，改成函数
	$num = num_rows($sql);	//返回记录数

	跳转，输出提示信息，改成函数
*/
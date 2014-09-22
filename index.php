<?php
require_once("config.php");



$time = time();

if($_POST){
	$user=$_POST["user"];
	$massage=$_POST["massage"];
	mysql_query("insert into massage (user, massage, time)
	values ('$user', '$massage', '$time')");
}

$i = 1;
$str="";
$result = mysql_query("select * from massage");
while($row = mysql_fetch_array($result)){
	$str.= "<tr>";
    $str.= "<td>".$i."</td>";
    $str.= "<td>".$row['user']."</td>";
    $str.= "<td>".date('Y-m-d H:i:s',$row['time'])."</td>";
    $str.= "<td>".$row['massage']."</td>";
    $str.= "<td><a href='xiugai.php?id=".$row['id']."'>修改</a>&nbsp;&nbsp;<a href='delete.php?id=".$row['id']."'>删除</a></td>";
    $str.= "</tr>";
    $i++;
    }

/*
	将获取数据，整合一个变量，用.=
*/

require_once("index.html");
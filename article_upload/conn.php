<?php 
$host = "127.0.0.1";
$usename = "root";
$password = "";

$conn = mysql_connect($host,$usename,$password);

if(!$conn){
	echo "数据库连接错误";
	exit;
}

 ?>
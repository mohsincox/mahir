<?php
include_once("header.php");
?>

<?php
$link=mysql_connect("localhost","root","")or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$sn=$_POST["sub_name"];

$query="insert into sub_hum(sub_name,created) values('$sn',now())";
$r=mysql_query($query,$link);
if($r)
	echo "inserted";
else
	echo "not inserted";
include "show_shum.php";
?>
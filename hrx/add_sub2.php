<?php
include_once("header.php");
?>

<?php
$link=mysql_connect("localhost","root","")or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$ti=$_POST["subname"];
//$te=$_POST["teachers"];
//$dn=$_POST["dept"];

$query="insert into subjects(subname,created) values('$ti',now())";
$r=mysql_query($query,$link);
if($r)
	echo "inserted";
else
	echo "not inserted";
include "show_sub.php";
?>
<?php
include_once("header.php");
?>

<center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$eti=$_POST["esubname"];
//$edn=$_POST["edept"];
//$ete=$_POST["eteachers"];
$id=$_POST["subid"];

if(mysql_query("update subjects set subname='$eti',created = NOW() where id='$id'"))
	echo "Edited Successfully";
	
else
	echo "Not Edited";
include "show_sub.php";	
?>
</center>
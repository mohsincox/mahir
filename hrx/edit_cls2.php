<?php
include_once("header.php");
?>

<center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$ecls=$_POST["eclass"];
$id=$_POST["classid"];

if(mysql_query("update class set class='$ecls',created = NOW() where id='$id'"))
	echo "Edited Successfully";
	
else
	echo "Not Edited";
include "show_cls.php";	
?>
</center>
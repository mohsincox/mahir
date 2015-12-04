<?php
include_once("header.php");
?>

<center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$eti=$_POST["etitle"];
$ede=$_POST["edescription"];
$id=$_POST["noid"];

if(mysql_query("update notices set title='$eti',description='$ede',created = NOW() where id='$id'"))
	echo "Edited Successfully";
	
else
	echo "Not Edited";
include "show_no.php";	
?>
</center>
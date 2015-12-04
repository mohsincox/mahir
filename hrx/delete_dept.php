<?php
include_once("header.php");
?>
<center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$id=$_REQUEST["id"];

if(mysql_query("delete from departments where id=$id"))
	echo "Deleted Successfully";	
else
	echo "Not Deleted";
include "show_dept.php";
?>
</center>
<?php
include_once("header.php");
?>

<center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$edn=$_POST["edeptname"];
$id=$_POST["deptid"];

if(mysql_query("update departments set deptname='$edn',created = NOW() where id='$id'"))
	echo "Edited Successfully";
	
else
	echo "Not Edited";
include "show_dept.php";	
?>
</center>
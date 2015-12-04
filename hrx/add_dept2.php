<?php
include_once("header.php");
?>
<center>
<?php
$link=mysql_connect("localhost","root","")or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$dn=$_POST["deptname"];

$query="insert into departments (deptname,created) values('$dn',now())";
$r=mysql_query($query,$link);
if($r)
	echo "Inserted Successfully";
else
	echo "Not Inserted";
include "show_dept.php";
?>
</center>
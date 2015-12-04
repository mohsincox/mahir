<?php
include_once("header.php");
?>
<center>
<?php
$link=mysql_connect("localhost","root","")or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$cls=$_POST["class"];

$query="insert into class (class,created) values('$cls',now())";
$r=mysql_query($query,$link);
if($r)
	echo "Inserted Successfully";
else
	echo "Not Inserted";
include "show_cls.php";
?>
</center>
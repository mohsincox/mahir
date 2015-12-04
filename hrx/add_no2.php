<?php
include_once("header.php");
?>
<center>
<?php
$link=mysql_connect("localhost","root","")or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$ti=$_POST["title"];
$de=$_POST["description"];

$query="insert into notices(title,description,created) values('$ti','$de',now())";
$r=mysql_query($query,$link);
if($r)
	echo "Inserted Successfully";
else
	echo "Not Inserted";
include "show_no.php";
?>
</center>
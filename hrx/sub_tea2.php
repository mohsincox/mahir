<?php
include_once("header.php");
?>


<?php
$link=mysql_connect("localhost","root","")or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$su=$_POST["subject"];
$te=$_POST["teacher"];

$query="INSERT INTO subject_teacher(subject_id,teacher_id,last_update) VALUES('$su','$te',NOW())";
  $r=mysql_query($query);
  if($r)
	{	
		echo "Inserted Successfully";
	}
  else 
	echo "Not Inserted";
?>
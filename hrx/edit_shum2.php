<?php
include_once("header.php");
?>



<?php

$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$esn=$_POST["esub_name"];
$id=$_POST["ssciid"];

if(mysql_query("update sub_hum set sub_name='$esn',created = NOW() where id='$id'"))
	echo "edited";
	
else
	echo "not edited";
include "show_shum.php";	
?>
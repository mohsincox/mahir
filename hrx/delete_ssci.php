<?php
include_once("header.php");
?>


 <?php


$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$id=$_REQUEST["id"];

if(mysql_query("delete from sub_sci where id=$id"))
	echo "deleted";	
else
	echo "not deleted";
include "show_ssci.php";
?>
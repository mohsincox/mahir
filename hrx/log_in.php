<?php
session_start();

error_reporting (0);


$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$uname=$_POST["u_name"];
$pass=$_POST["pwd"];

if($uname&&$pass)
{
	$result=mysql_query("select * from users where username = '$uname' and password = '$pass'  limit 0, 1");
		while($row=mysql_fetch_array($result))
		{
			$un=$row['username'];
			$pas=$row['password'];
			$usertype=$row['usertype'];
		}
	if($uname==$un && $pass==$pas)
	{
		
		$_SESSION['u_name']=$un;
		$_SESSION['pwd']=$pas;
		$_SESSION['usertype']=$usertype;		
		include "header.php";
		exit;
	}
	else
		echo "wrong";

}

?>
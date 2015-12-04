<?php
include_once("header.php");
?>

<html>
<body>
<?php
//include("header.php");
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

if($_POST["submit"] == "submit")
{
	$su=$_POST["subject"];
	$te=$_POST["teacher"];

	$query="INSERT INTO subject_teacher(subject_id,teacher_id,last_update) VALUES('$su','$te',NOW())";
	$r=mysql_query($query);
	if($r)
	{	
		$info = "inserted";
	}
	else 
	$info =  "not inserted";
}

$query="select * from subjects";
$result= mysql_query($query);
?>
<div>
<?php
echo $info;
?>
<center>
<h2>Assign Subject to Teacher</h2>
<form name="input" action="sub_tea.php" method="POST">
<table>
<tr>
<td>Select Subject :</td>
<td><select name="subject">
<?php
while($row=mysql_fetch_array($result))
{
echo "<option value=".$row['id'].">".$row['subname']."</option>";
}
?>
</select></td>
</tr>
<tr>
<?php

$query="select * from teachers";
$result= mysql_query($query);
?>
<td>Select Teachers :</td>
<td><select name="teacher">
<?php
while($row=mysql_fetch_array($result))
{
echo "<option value=".$row['id'].">".$row['tename']."</option>";
}
?>

</select></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit"/></td>
</tr>
</table>
</center>
</form> 
</div>
</body>
</html>
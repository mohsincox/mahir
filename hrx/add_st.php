<?php
include_once("header.php");
?>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
?>
<html>
<body>
<form name="input" action="add_st2.php" method="POST">
<center>
<h3>Add Student</h3>
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="stname" /></td>
</tr>
<tr>
<td>Father's Name :</td>
<td><input type="text" name="stfname" /></td>
</tr>
<tr>
<td>Mother's Name :</td>
<td><input type="text" name="stmname"/></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="text" name="stemail"/></td>
</tr>
<tr>
	<td>Mobile no :</td>
	<td><input type="text" name="stmobile_no"/></td>
</tr>
<tr>
	<td>Present Address :</td>
	<td><input type="text" name="stpreadd"/></td>
</tr>
<tr>
	<td>Permanent Address :</td>
	<td><input type="text" name="stperadd"/></td>
</tr>
<?php
$query="select * from class";
$result= mysql_query($query);
?>
<tr>
	<td>Select Class :</td>
	<td><select name="class">
	<?php
	while($row=mysql_fetch_array($result))
	{
	echo "<option value=".$row['class'].">".$row['class']."</option>";
	}
	?>
	</select></td>
</tr>
<?php
$query="select * from departments";
$result= mysql_query($query);
?>
<tr>
	<td>Select Group :</td>
	<td><select name="group">
	<?php
	while($row=mysql_fetch_array($result))
	{
	echo "<option value=".$row['deptname'].">".$row['deptname']."</option>";
	}
	?>
	</select></td>
</tr>
<tr>
	<td>User Name :</td>
	<td><input type="text" name="stusername"/></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="stpassword"/></td>
</tr>
<input type="hidden" name="uid"/>

<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>

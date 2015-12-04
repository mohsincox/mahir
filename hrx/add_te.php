<?php
include_once("header.php");
?>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
?>
<html>
<body>
<form name="input" action="add_te2.php" method="POST">
<center>
<h3>Add Teacher</h3>
<table>
<?php
$query="select * from departments";
$result= mysql_query($query);
?>
<tr>
<td>Select Department :</td>
<td><select name="dept">
<?php
while($row=mysql_fetch_array($result))
{
echo "<option value=".$row['deptname'].">".$row['deptname']."</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Name :</td>
<td><input type="text" name="tename" /></td>
</tr>
<tr>
<td>Father's Name :</td>
<td><input type="text" name="tefname" /></td>
</tr>
<tr>
<td>Mother's Name :</td>
<td><input type="text" name="temname"/></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="text" name="teemail"/></td>
</tr>
<tr>
	<td>Mobile no :</td>
	<td><input type="text" name="temobile_no"/></td>
</tr>
<tr>
	<td>Present Address :</td>
	<td><input type="text" name="tepreadd"/></td>
</tr>
<tr>
	<td>Permanent Address :</td>
	<td><input type="text" name="teperadd"/></td>
</tr>

<tr>
	<td>User Name :</td>
	<td><input type="text" name="teusername"/></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="tepassword"/></td>
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

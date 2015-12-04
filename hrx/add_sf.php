<?php
include_once("header.php");
?>

<html>
<body>
<form name="input" action="add_sf2.php" method="POST">
<center>
<h3>Add Staff</h3>
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="sfname" /></td>
</tr>
<tr>
<td>Father's Name :</td>
<td><input type="text" name="sffname" /></td>
</tr>
<tr>
<td>Mother's Name :</td>
<td><input type="text" name="sfmname"/></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="text" name="sfemail"/></td>
</tr>
<tr>
	<td>Mobile no :</td>
	<td><input type="text" name="sfmobile_no"/></td>
</tr>
<tr>
	<td>Present Address :</td>
	<td><input type="text" name="sfpreadd"/></td>
</tr>
<tr>
	<td>Permanent Address :</td>
	<td><input type="text" name="sfperadd"/></td>
</tr>

<tr>
	<td>User Name :</td>
	<td><input type="text" name="sfusername"/></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="sfpassword"/></td>
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

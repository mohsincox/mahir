<?php
include_once("header.php");
?>

<html>
<body>
<form name="input"action="passvar.php" method="post">
<center>
<h2>Change Password:</h2>
<table>
<tr>
<td>User Name :</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Old Password :</td>
<td><input type="password" name="oldpass" /></td>
</tr>
<tr>
<td>New Password :</td>
<td><input type="password" name="newpass"/></td>
</tr>
<tr>
<td>Confirm Password :</td>
<td><input type="password" name="conpass"/></td>
</tr>
<tr>
<input type="hidden" name="userid" value="<?php echo $_REQUEST['id'];?>"/>
</tr>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
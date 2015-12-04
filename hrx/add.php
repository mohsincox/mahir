<?php
include_once("header.php");
?>



<html>
<body>
<form name="input" action="add2.php" method="POST">
<center>
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>Mobile no :</td>
<td><input type="text" name="mobile_no"/></td>
</tr>
<tr>
<td>User Type :</td>

<td><input type="radio" name="usertype" value="Student" /> Student<br />
<input type="radio" name="usertype" value="Teacher" /> Teacher<br/>
<input type="radio" name="usertype" value="Staff" /> Staff</td>
</tr>
<tr>
<td>User Name :</td>
<td><input type="text" name="username"/></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="password"/></td>
</tr>
<tr>
<td>Created at :</td>
<td><input type="text" name="created_at"/></td>
</tr>
<tr>
<td>Created by :</td>
<td><input type="text" name="created_by"/></td>
</tr>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>



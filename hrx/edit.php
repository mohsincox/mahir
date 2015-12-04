<?php
include_once("header.php");
?>



<html>
<body>
<form name="input"action="edit2.php" method="post">
<center>
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="ename" /></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="text" name="eemail" /></td>
</tr>
<tr>
<td>Phone :</td>
<td><input type="text" name="emobile_no"/></td>
</tr>
<tr>
<td>User Name :</td>
<td><input type="text" name="eusername"/></td>

</tr>
<input type="hidden" name="userid" value="<?php echo $_REQUEST['id'];?>"/>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
<?php
include_once("header.php");
?>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
?>
<?php
//include("header.php");
?>

<html>
<body>
<center>
<h2>Add New Subject</h2>
<form name="input" action="add_sub2.php" method="POST">

<table>
<tr>
<td>Subject Name :</td>
<td><input type="text" name="subname" /></td>
</tr>


<tr>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
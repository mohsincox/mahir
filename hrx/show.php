<?php
include_once("header.php");
?>


<html>
<body>
<?php
//include("header.php");
?>
<div>
<center>
<h1>Users Information</h1>
<table border="1">
<tr>
	<td width="100"><b><i>User Type</i></b></td>
	<td width="100"><b><i>Name</i></b></td>
	<td width="100"><b><i>Email</i></b></td>
	<td width="100"><b><i>Phone</i></b></td>
	<td width="100"><b><i>User Name</i></b></td>
	<td width="100"><b><i>Created at</i></b></td>
	
</tr>
</table>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$result=mysql_query("select * from users");
while($row=mysql_fetch_array($result))
{
?>	

<table border="1">
<tr>
	<td width="100" height="50"><?php echo $row['usertype'];?></td>
	<td width="100"><?php echo $row['name'];?></td>
	<td width="100"><?php echo $row['email'];?></td>
	<td width="100"><?php echo $row['mobile_no'];?></td>
	<td width="100"><?php echo $row['username'];?></td>
	<td width="100"><?php echo $row['created_at'];?></td>
	
</tr>
</table>
<?php	
}
?>
</center>
</div>
</body>
</html>
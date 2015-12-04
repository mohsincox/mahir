<?php
include_once("header.php");
?>


<html>
<body>

<center>
<h1>Class List</h1>
<table border="1">
<tr>
	<td width="100"><b><i>Class</i></b></td>
	<td width="100"><b><i>Created at</i></b></td>
	<?php
	if($_SESSION['usertype'] == "Teacher")
	{
	?>
	<td width="100"><b><i>Action</i></b></td>
	<?php
	}
	?>
</tr>
</table>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$result=mysql_query("select * from class");
while($row=mysql_fetch_array($result))
{
?>	

<table border="1">
<tr>
	<td width="100"><?php echo $row['class'];?></td>
	<td width="100"><?php echo $row['created'];?></td>
	<?php
	if($_SESSION['usertype'] == "Teacher")
	{
	?>
	<td width="100"><a href="edit_cls.php?id=<?php echo $row['id'];?>">Edit</a><br><a href="delete_cls.php?id=<?php echo $row['id'];?>">Delete</a></td>
	<?php
	}
	?>
</tr>
</table>
<?php	
}
?>
</center>
</body>
</html>
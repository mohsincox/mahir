<?php
include_once("header.php");
?>


 <html>
<body>
<br />
<a href="add_ssci.php">add new subject</a> 
<center>
<h1>Subject of Science Students</h1>
<table border="1">
<tr>
	<td width="100"><b><i>Subject Name</i></b></td>
	<td width="100"><b><i>Created at</i></b></td>
	<td width="100"><b><i>Action</i></b></td>
</tr>
</table>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$result=mysql_query("select * from sub_sci");
while($row=mysql_fetch_array($result))
{
?>	

<table border="1">
<tr>
	<td width="100"><?php echo $row['sub_name'];?></td>
	<td width="100"><?php echo $row['created'];?></td>
	<td width="100"><a href="edit_ssci.php?id=<?php echo $row['id'];?>">Edit</a><br><a href="delete_ssci.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr>
</table>
<?php	
}
?>
</center>
</body>
</html>
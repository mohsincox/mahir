<?php
include_once("header.php");
?>


<html>
<body>
<center>
<h1>Staffs Information</h1>
<table border="1">
<tr>
	<td width="100"><b><i>Name</i></b></td>
	<td width="100"><b><i>Father's Name</i></b></td>
	<td width="100"><b><i>Mother's Name</i></b></td>
	<td width="100"><b><i>Email</i></b></td>
	<td width="100"><b><i>Mobile No</i></b></td>
	<td width="100"><b><i>Present Address</i></b></td>
	<td width="100"><b><i>Permanent Address</i></b></td>
	
	<td width="100"><b><i>User id</i></b></td>
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

$result=mysql_query("select * from staffs");
while($row=mysql_fetch_array($result))
{
?>	

<table border="1">
<tr>
	<td width="100"><?php echo $row['sfname'];?></td>
	<td width="100"><?php echo $row['sffname'];?></td>
	<td width="100"><?php echo $row['sfmname'];?></td>
	<td width="100"><?php echo $row['sfemail'];?></td>
	<td width="100"><?php echo $row['sfmobile_no'];?></td>
	<td width="100"><?php echo $row['sfpreadd'];?></td>
	<td width="100"><?php echo $row['sfperadd'];?></td>
	
	<td width="100"><?php echo $row['uid'];?></td>
	<?php
	if($_SESSION['usertype'] == "Teacher")
	{
	?>
	<td width="100"><a href="edit_sf.php?id=<?php echo $row['id'];?>">Edit</a><br><a href="delete_sf.php?id=<?php echo $row['id'];?>">Delete</a></td>
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
<?php
include_once("header.php");
?>


<html>
<body>
<center>
<h1>Teachers Information</h1>
<table border="1">
<tr>
	<td width="100"><b><i>Name</i></b></td>
	<td width="100"><b><i>Father's Name</i></b></td>
	<td width="100"><b><i>Mother's Name</i></b></td>
	<td width="100"><b><i>Email</i></b></td>
	<td width="100"><b><i>Mobile No</i></b></td>
	<td width="100"><b><i>Present Address</i></b></td>
	<td width="100"><b><i>Permanent Address</i></b></td>
	<td width="100"><b><i>Department</i></b></td>
	
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

$result=mysql_query("select * from teachers");
while($row=mysql_fetch_array($result))
{
?>	

<table border="1">
<tr>
	<td width="100"><a href="show_tea_sub_list.php?teacher_id=<?php echo $row['id'];?>"><?php echo $row['tename'];?></a></td>
	<td width="100"><?php echo $row['tefname'];?></td>
	<td width="100"><?php echo $row['temname'];?></td>
	<td width="100"><?php echo $row['teemail'];?></td>
	<td width="100"><?php echo $row['temobile_no'];?></td>
	<td width="100"><?php echo $row['tepreadd'];?></td>
	<td width="100"><?php echo $row['teperadd'];?></td>
	<td width="100"><?php echo $row['deptname'];?></td>
	
	<td width="100"><?php echo $row['uid'];?></td>
	<?php
	if($_SESSION['usertype'] == "Teacher")
	{
	?>
	<td width="100"><a href="edit_te.php?id=<?php echo $row['id'];?>">Edit</a><br><a href="delete_te.php?id=<?php echo $row['id'];?>">Delete</a></td>
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
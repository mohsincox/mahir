<?php
include_once("header.php");
?>


<html>
<body>
<br />

<h1><center>Students Information</center></h1>
<center>
<table border="1">
<tr>
	<td width="100"><b><i>Name</i></b></td>
	<td width="100"><b><i>Father's Name</i></b></td>
	<td width="100"><b><i>Mother's Name</i></b></td>
	<td width="100"><b><i>Email</i></b></td>
	<td width="100"><b><i>Mobile No</i></b></td>
	<td width="100"><b><i>Present Address</i></b></td>
	<td width="100"><b><i>Permanent Address</i></b></td>
	<td width="100"><b><i>Class</i></b></td>
	<td width="100"><b><i>Group</i></b></td>
	
	<td width="100"><b><i>User id</i></b></td>
	<?php
	if(($_SESSION['usertype'] == "Teacher") || ($_SESSION['usertype'] == "Staff" ))
	{
	?>
	<td width="100"><b><i>Action</i></b></td>
	<?php
	}
	?>
</tr>
</table>
</center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$result=mysql_query("select * from students");
while($row=mysql_fetch_array($result))
{
//$id=$row["id"];
//$name=$row["stemail"];
//$options="<OPTION VALUE='" . $id . "'>" . $name ."</option>";
?>	
<center>
<table border="1">
<tr>
	<td width="100"><?php echo $row['stname'];?></td>
	<td width="100"><?php echo $row['stfname'];?></td>
	<td width="100"><?php echo $row['stmname'];?></td>
	<td width="100"><?php echo $row['stemail'];?></td>
	<td width="100"><?php echo $row['stmobile_no'];?></td>
	<td width="100"><?php echo $row['stpreadd'];?></td>
	<td width="100"><?php echo $row['stperadd'];?></td>
	<td width="100"><?php echo $row['class'];?></td>
	<td width="100"><?php echo $row['group'];?></td>
	
	<td width="100"><?php echo $row['uid'];?></td>
	<?php
	if($_SESSION['usertype'] == "Teacher" || $_SESSION['usertype'] == "Staff" )
	{
	?>
	<td width="100"><a href="edit_st.php?id=<?php echo $row['id'];?>">Edit</a><br><a href="delete_st.php?id=<?php echo $row['id'];?>">Delete</a></td>
	<?php
	}
	?>
</tr>
</table>


</center>
<?php
}
?>
</body>
</html>
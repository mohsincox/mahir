<?php
include_once("header.php");
?>


<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from teachers where id='{$_GET["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
	$ten=$row['tename'];
	$tefn=$row['tefname'];
	$temn=$row['temname'];
	$tee=$row['teemail'];
	$tem=$row['temobile_no'];
	$teba=$row['tepreadd'];
	$teaa=$row['teperadd'];
	$teun=$row['teusername'];
	$tepass=$row['tepassword'];
}

?>
<html>
<body>
<form name="input"action="edit_te2.php" method="post">
<center>
<h1>Edit Teacher Information</h1>
<table>
<?php

$query="select * from departments";
$result= mysql_query($query);
?>
<tr>
<td>Select Department :</td>
<td><select name="edept"  />
<?php
while($row=mysql_fetch_array($result))
{
echo "<option value=".$row['deptname'].">".$row['deptname']."</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Name :</td>
<td><input type="text" name="etename" value="<?php echo $ten?>" /></td>
</tr>
<tr>
<td>Father's Name :</td>
<td><input type="text" name="etefname" value="<?php echo $tefn?>" /></td>
</tr>
<tr>
<td>Mother's Name :</td>
<td><input type="text" name="etemname" value="<?php echo $temn?>" /></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="text" name="eteemail" value="<?php echo $tee?>" /></td>
</tr>
<tr>
<td>Mobile no :</td>
<td><input type="text" name="etemobile_no" value="<?php echo $tem?>" /></td>
</tr>
<tr>
<td>Present Address :</td>
<td><input type="text" name="etepreadd" value="<?php echo $teba?>" /></td>
</tr>
<tr>
<td>Permanent Address :</td>
<td><input type="text" name="eteperadd" value="<?php echo $teaa?>" /></td>
</tr>

<tr>
<td>User Name :</td>
<td><input type="text" name="eteusername" value="<?php echo $teun?>" /></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="etepassword" value="<?php echo $tepass?>" /></td>
</tr>
<input type="hidden" name="teid" value="<?php echo $_REQUEST['id'];?>"/>

<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
<?php
include_once("header.php");
?>


<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from staffs where id='{$_GET["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
	$sfn=$row['sfname'];
	$sffn=$row['sffname'];
	$sfmn=$row['sfmname'];
	$sfe=$row['sfemail'];
	$sfm=$row['sfmobile_no'];
	$sfba=$row['sfpreadd'];
	$sfaa=$row['sfperadd'];
	$sfun=$row['sfusername'];
	$sfpass=$row['sfpassword'];
}

?>
<html>
<body>
<form name="input"action="edit_sf2.php" method="post">
<center>
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="esfname" value="<?php echo $sfn?>" /></td>
</tr>
<tr>
<td>Father's Name :</td>
<td><input type="text" name="esffname" value="<?php echo $sffn?>" /></td>
</tr>
<tr>
<td>Mother's Name :</td>
<td><input type="text" name="esfmname" value="<?php echo $sfmn?>" /></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="text" name="esfemail" value="<?php echo $sfe?>" /></td>
</tr>
<tr>
<td>Mobile no :</td>
<td><input type="text" name="esfmobile_no" value="<?php echo $sfm?>" /></td>
</tr>
<tr>
<td>Present Address :</td>
<td><input type="text" name="esfpreadd" value="<?php echo $sfba?>" /></td>
</tr>
<tr>
<td>Permanent Address :</td>
<td><input type="text" name="esfperadd" value="<?php echo $sfaa?>" /></td>
</tr>

<tr>
<td>User Name :</td>
<td><input type="text" name="esfusername" value="<?php echo $sfun?>" /></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="esfpassword" value="<?php echo $sfpass?>" /></td>
</tr>
<input type="hidden" name="sfid" value="<?php echo $_REQUEST['id'];?>"/>

<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
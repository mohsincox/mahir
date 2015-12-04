<?php
include_once("header.php");
?>



<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from students where id='{$_GET["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_array($result))
{
	$stn=$row['stname'];
	$stfn=$row['stfname'];
	$stmn=$row['stmname'];
	$ste=$row['stemail'];
	$stm=$row['stmobile_no'];
	$stba=$row['stpreadd'];
	$staa=$row['stperadd'];
	$stc=$row['class'];
	$stg=$row['group'];
	$stun=$row['stusername'];
	$stpass=$row['stpassword'];
}

?>	
<html>
<body>
<form name="input"action="edit_st2.php" method="post">
<center>
<h1>Edit Student Information</h1>
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="estname" value="<?php echo $stn?>" /></td>
</tr>
<tr>
<td>Father's Name :</td>
<td><input type="text" name="estfname" value="<?php echo $stfn ?>" /></td>
</tr>
<tr>
<td>Mother's Name :</td>
<td><input type="text" name="estmname" value="<?php echo $stmn ?>" /></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="text" name="estemail" value="<?php echo $ste ?>" /></td>
</tr>
<tr>
<td>Mobile no :</td>
<td><input type="text" name="estmobile_no" value="<?php echo $stm ?>" /></td>
</tr>
<tr>
<td>Present Address :</td>
<td><input type="text" name="estpreadd" value="<?php echo $stba ?>" /></td>
</tr>
<tr>
<td>Permanent Address :</td>
<td><input type="text" name="estperadd" value="<?php echo $staa ?>" /></td>
</tr>
<tr>
<td>Class :</td>
<td><input type="text" name="eclass" value="<?php echo $stc ?>" /></td>
</tr>
<tr>
<td>Group :</td>
<td><input type="text" name="egroup"value="<?php echo $stg ?>" /></td>
</tr>
<tr>
<td>User Name :</td>
<td><input type="text" name="estusername" value="<?php echo $stun ?>" /></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="estpassword" value="<?php echo $stpass ?>" /></td>
</tr>
<input type="hidden" name="stid" value="<?php echo $_REQUEST['id'];?>"/>

<tr>
<td><input type="Submit" value="Submit"</td>

</tr>
</table>
</center>
</form> 
</body>
</html>
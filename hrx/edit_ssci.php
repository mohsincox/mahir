<?php
include_once("header.php");
?>



<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from sub_sci where id='{$_GET["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
	$sn=$row['sub_name'];
}
?>
<html>
<body>
<form name="input"action="edit_ssci2.php" method="post">
<center>
<table>
<tr>
<td>Subject Name :</td>
<td><input type="text" name="esub_name" value="<?php echo $sn?>" /></td>
</tr>


<input type="hidden" name="ssciid" value="<?php echo $_REQUEST['id'];?>"/>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
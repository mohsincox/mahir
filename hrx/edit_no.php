<?php
include_once("header.php");
?>



<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from notices where id='{$_GET["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
	$ti=$row['title'];
	$des=$row['description'];
}
?>
<html>
<body>
<form name="input"action="edit_no2.php" method="post">
<center>
<table>
<tr>
<td>Title :</td>
<td><input type="text" name="etitle" value="<?php echo $ti?>" /></td>
</tr>
<tr>
<td>Description :</td>
<td><input type="text" name="edescription" value="<?php echo $des?>" /></td>
</tr>

<input type="hidden" name="noid" value="<?php echo $_REQUEST['id'];?>"/>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
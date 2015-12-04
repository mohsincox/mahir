<?php
include_once("header.php");
?>


<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from subjects where id='{$_GET["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_array($result))
{
	$ti=$row['subname'];
	//$des=$row['description'];
	//$dn=$row['deptname'];
}
?>

<html>
<body>
<form name="input"action="edit_sub2.php" method="post">
<center>
<table>

<tr>
<td>Subject Name :</td>
<td><input type="text" name="esubname" value="<?php echo $ti?>" /></td>
</tr>


<input type="hidden" name="subid" value="<?php echo $_REQUEST['id'];?>"/>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
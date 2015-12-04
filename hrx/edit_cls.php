<?php
include_once("header.php");
?>



<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from class where id='{$_GET["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_array($result))
{
	$cls=$row['class'];
}
?>
<html>
<body>
<form name="input"action="edit_cls2.php" method="post">
<center>
<table>
<tr>
<td>Class :</td>
<td><input type="text" name="eclass" value="<?php echo $cls?>" /></td>
</tr>
<tr>


<input type="hidden" name="classid" value="<?php echo $_REQUEST['id'];?>"/>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
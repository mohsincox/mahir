<?php
include_once("header.php");
?>



<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from departments where id='{$_GET["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_array($result))
{
	$dn=$row['deptname'];
}
?>
<html>
<body>
<form name="input"action="edit_dept2.php" method="post">
<center>
<table>
<tr>
<td>Dept. Name :</td>
<td><input type="text" name="edeptname" value="<?php echo $dn?>" /></td>
</tr>
<tr>


<input type="hidden" name="deptid" value="<?php echo $_REQUEST['id'];?>"/>
<tr>
<td><input type="Submit" value="Submit"</td>
</tr>
</table>
</center>
</form> 
</body>
</html>
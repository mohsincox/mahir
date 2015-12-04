<?php
include_once("header.php");
?>


<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$query="select * from notices where id='{$_REQUEST["id"]}' limit 1";
$result= mysql_query($query);
while($row=mysql_fetch_array($result))
{
	$des=$row['description'];
}
?>
<html>
<body>
<center>
<table>
<tr>
<td><i><b>Description :</b></i></td>
</tr>
<tr>
<td><?php echo $des ?></td>
</tr>
</table>
</center>
</body>
</html>
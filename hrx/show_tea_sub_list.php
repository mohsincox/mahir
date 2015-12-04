<?php
include_once("header.php");
?>

<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$te_id=$_REQUEST["teacher_id"];
$query="select subject_id from subject_teacher where teacher_id=$te_id";
$result=mysql_query($query);
$i=0;
while($row=mysql_fetch_array($result))
{
	$slist[$i]=$row["subject_id"];
	$i++;
}
if(count($slist) > 0)
{
	$slist=implode(",",$slist);
	
}
?>
<html>
<body>
<br />

<center>
<?php
$query="select tename from teachers where id=$te_id";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
?>
<h1><?php echo $row["tename"]; }?> teaches this subject</h1>
<table border="1">
<tr>
	<td width="100"><b><i>Subject Name</i></b></td>
	
</tr>
</table>
<?php
$qu="select * from subjects where id in ($slist)";
$re=mysql_query($qu);
while($row=mysql_fetch_array($re))
{
?>

<table border="1">
<tr>
	<td width="100"><?php echo $row['subname'];?></td>
	
</tr>
</table>
<?php	
}
?>
</center>
</body>
</html>
<?php
include_once("header.php");
?>

<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$sub_id=$_REQUEST["subject_id"];
$query="select teacher_id from subject_teacher where subject_id=$sub_id";
$result=mysql_query($query);
$i=0;
while($row=mysql_fetch_array($result))
{
	$slist[$i]=$row["teacher_id"];
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
$query="select subname from subjects where id=$sub_id";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
?>
<h1> Teachers of <?php echo $row["subname"]; }?></h1>
<table border="1">
<tr>
	<td width="100"><b><i>Teachers Name</i></b></td>
	
</tr>
</table>
<?php
$qu="select * from teachers where id in ($slist)";
$re=mysql_query($qu);
while($row=mysql_fetch_array($re))
{
?>

<table border="1">
<tr>
	<td width="100"><?php echo $row['tename'];?></td>
	
</tr>
</table>
<?php	
}
?>
</center>
</body>
</html>
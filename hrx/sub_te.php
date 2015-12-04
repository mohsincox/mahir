<?php
include_once("header.php");
?>

<html>
<body>
<center>
<?php
//include("header.php");
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
?>

<?php
//$link=mysql_connect("localhost","root","")or die("can not connect");
//mysql_select_db("cms",$link) or die(mysql_error());
if(isset($_POST['submit']))
{
$suid=$_POST["subject_id"];
$teid=$_POST["teacher_id"];
if (isset($_POST['teacher_id'])) 
      {
        $username = mysql_real_escape_string($_POST['teacher_id']);

       if (!empty($username)) 
        {
            $username_query = mysql_query("SELECT *
                                           FROM subject_teacher
                                           WHERE teacher_id = '$username'");
             $count=mysql_num_rows( $username_query);
             if($count==0)
			 {
			 
			 
			 
               $query="INSERT INTO subject_teacher(subject_id,teacher_id,last_update) VALUES('$suid','$teid',NOw())";		
			   $r=mysql_query($query,$link);
  
               if($r)
		          print" Inserted ";
	           else
	              print "Not Inserted";
			}
			else
				echo "This teacher already assigned";
		}
	}
}	
?>

<?php
$query="select * from subjects";
$result= mysql_query($query);
?>
<div>
<?php

?>
<center>
<h2>Assign Subject to Teacher</h2>
<form name="input" action="sub_te.php" method="POST">
<table>
<tr>
<td>Select Subject :</td>
<td><select name="subject_id">
<?php
while($row=mysql_fetch_array($result))
{
echo "<option value=".$row['id'].">".$row['subname']."</option>";
}
?>
</select></td>
</tr>
<tr>
<?php

$query="select * from teachers";
$result= mysql_query($query);
?>
<td>Select Teachers :</td>
<td><select name="teacher_id">
<?php
while($row=mysql_fetch_array($result))
{
echo "<option value=".$row['id'].">".$row['tename']."</option>";
}
?>

</select></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>
</center>
</form> 
</div>
</center>
</body>
</html>


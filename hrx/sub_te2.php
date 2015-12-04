<?php
$link=mysql_connect("localhost","root","")or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
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
		          print "Assigned Successfully ";
	           else
	              print "Not Assigned";
			}
			else
				echo "This Teacher Already Assigned";
		}
	}	
?>
</center>
<?php
/*//$username = $_POST['username'];  

//echo $username;

$query = ("SELECT * FROM subject_teacher WHERE teacher_id='$teid'");

$result1 = mysql_query($query) or die (mysql_error().$query);    
$count = mysql_num_rows($result1);

if ($count>0) {
echo 'Sorry! This Username already exists!';
} else {
    $teid = $_POST['teacher_id'];
    $sql = "INSERT INTO projectuser (subject_id, teacher_id, last_update)
            VALUES
            ('$suid', '".mysql_real_escape_string($teid)."', NOW())";
	$r=mysql_query($sql);
  if($r)
		echo "inserted";
  else 
	echo "not inserted";

}
*/

/*$query="INSERT INTO subject_teacher(subject_id,teacher_id,last_update) VALUES('$suid','$teid',NOW())";
  $r=mysql_query($query);
  if($r)
		echo "inserted";
  else 
	echo "not inserted";
	*/
?>
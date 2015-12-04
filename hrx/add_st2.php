<?php
include_once("header.php");
?>
<center>
<?php
$link=mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$stn=$_POST["stname"];
$stfn=$_POST["stfname"];
$stmn=$_POST["stmname"];
$ste=$_POST["stemail"];
$stm=$_POST["stmobile_no"];
$stba=$_POST["stpreadd"];
$staa=$_POST["stperadd"];
$stc=$_POST["class"];
$stg=$_POST["group"];
$stun=$_POST["stusername"];
$stpass= ($_POST["stpassword"]);
//$u_id=$_POST["uid"];
if( !(strpos($ste, "@") AND strpos($ste, ".")) ){
        echo "Wrong Email Addresss.";
    }
    else 
	{
       
      if (isset($_POST['stusername'])) 
      {
        $stuname = mysql_real_escape_string($_POST['stusername']);

       if (!empty($stuname)) 
       {
            $stusername_query = mysql_query("SELECT *
                                           FROM students
                                           WHERE stusername = '$stuname'");
             $count=mysql_num_rows( $stusername_query);
             if($count==0)
              if(isset($_POST['stemail']))
				$e = mysql_real_escape_string($_POST['stemail']);
				  if (!empty($e)) 
         {
            $e_query = mysql_query("SELECT *
                                           FROM students
                                           WHERE stemail = '$e'");
             $ecount=mysql_num_rows( $e_query);
             if($ecount==0)
{



  $query="INSERT INTO users(name,email,mobile_no,username,password,usertype,created_at) VALUES('$stn','$ste','$stm','$stun','$stpass','Student',NOW())";
  $r=mysql_query($query,$link);
  if($r)
	{	    
		$query = "SELECT id from users where username = '$stun' and password = '$stpass' order by id desc limit 1";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$uid=$row['id'];			
		}
		
		$query = "INSERT INTO students(stname, stfname, stmname, stemail, stmobile_no, stpreadd, stperadd, class, `group`,stusername,stpassword, uid) VALUES ('$stn','$stfn','$stmn','$ste','$stm','$stba','$staa','$stc','$stg','$stun','$stpass','$uid')";
		$r=mysql_query($query,$link);
		if($r)
		{
			echo "Inserted Successfully";
		}
	}
	else
	    print "Not Inserted";  


}
			else 
				echo "Email Already Exsist";
		}
		else
			echo "Username Already Exsist";
	}
	}
	}	
include "show_st.php";	
?>
</center>
<?php
include_once("header.php");
?>
<center>
<?php
$link=mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$sfn=$_POST["sfname"];
$sffn=$_POST["sffname"];
$sfmn=$_POST["sfmname"];
$sfe=$_POST["sfemail"];
$sfm=$_POST["sfmobile_no"];
$sfba=$_POST["sfpreadd"];
$sfaa=$_POST["sfperadd"];
$sfun=$_POST["sfusername"];
$sfpass=($_POST["sfpassword"]);
//$id=$_POST["uid"];
if( !(strpos($sfe, "@") AND strpos($sfe, ".")) ){
        echo "Wrong Email Addresss.";
    }
    else 
	{
       
      if (isset($_POST['sfusername'])) 
      {
        $sfusername = mysql_real_escape_string($_POST['sfusername']);

       if (!empty($sfusername)) 
       {
            $sfusername_query = mysql_query("SELECT *
                                           FROM staffs
                                           WHERE sfusername = '$sfusername'");
             $count=mysql_num_rows( $sfusername_query);
             if($count==0)
              if(isset($_POST['sfemail']))
				$e = mysql_real_escape_string($_POST['sfemail']);
				  if (!empty($e)) 
         {
            $e_query = mysql_query("SELECT *
                                           FROM staffs
                                           WHERE sfemail = '$e'");
             $ecount=mysql_num_rows( $e_query);
             if($ecount==0)
{			 

  $query="INSERT INTO users(name,email,mobile_no,username,password,usertype,created_at) VALUES('$sfn','$sfe','$sfm','$sfun','$sfpass','Staff',NOW())";		
  $r=mysql_query($query,$link);
  if($r)
	{
		$query = "SELECT id from users where username = '$sfun' and password = '$sfpass' order by id desc limit 1";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$uid=$row['id'];			
		}
		
		$query = "INSERT INTO staffs(sfname, sffname, sfmname, sfemail, sfmobile_no, sfpreadd, sfperadd, sfusername, sfpassword, uid) VALUES ('$sfn','$sffn','$sfmn','$sfe','$sfm','$sfba','$sfaa','$sfun','$sfpass','$uid')";
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
	include "show_sf.php";
?>
</center>
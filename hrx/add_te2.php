<?php
include_once("header.php");
?>
<center>
<?php
$link=mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$ten=$_POST["tename"];
$tefn=$_POST["tefname"];
$temn=$_POST["temname"];
$tee=$_POST["teemail"];
$tem=$_POST["temobile_no"];
$teba=$_POST["tepreadd"];
$teaa=$_POST["teperadd"];
$teun=$_POST["teusername"];
$tepass=($_POST["tepassword"]);
//$u_id=$_POST["uid"];
$dn=$_POST["dept"];

if( !(strpos($tee, "@") AND strpos($tee, ".")) ){
        echo "Wrong Email Addresss.";
    }
    else 
	{
       
      if (isset($_POST['teusername'])) 
      {
        $teusername = mysql_real_escape_string($_POST['teusername']);

       if (!empty($teusername)) 
       {
            $teusername_query = mysql_query("SELECT *
                                           FROM teachers
                                           WHERE teusername = '$teusername'");
             $count=mysql_num_rows( $teusername_query);
             if($count==0)
              if(isset($_POST['teemail']))
				$e = mysql_real_escape_string($_POST['teemail']);
				  if (!empty($e)) 
         {
            $e_query = mysql_query("SELECT *
                                           FROM teachers
                                           WHERE teemail = '$e'");
             $ecount=mysql_num_rows( $e_query);
             if($ecount==0)
{


  $query="INSERT INTO users(name,email,mobile_no,username,password,usertype,created_at) VALUES('$ten','$tee','$tem','$teun','$tepass','Teacher',NOW())";		
  $r=mysql_query($query,$link);
  if($r)
	{
		$query = "SELECT id from users where username = '$teun' and password = '$tepass' order by id desc limit 1";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$uid=$row['id'];			
		}
		
		$query = "INSERT INTO teachers(tename, tefname, temname, teemail, temobile_no, tepreadd, teperadd, teusername, tepassword, uid,deptname) VALUES ('$ten','$tefn','$temn','$tee','$tem','$teba','$teaa','$teun','$tepass','$uid','$dn')";
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
include "show_te.php";	
?>
</center>
<?php
include_once("header.php");
?>



<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$eten=$_POST["etename"];
$etefn=$_POST["etefname"];
$etemn=$_POST["etemname"];
$etee=$_POST["eteemail"];
$etem=$_POST["etemobile_no"];
$eteba=$_POST["etepreadd"];
$eteaa=$_POST["eteperadd"];

$eteun=$_POST["eteusername"];
$etepass=$_POST["etepassword"];
$teid=$_POST["teid"];
$edn=$_POST["edept"];

if( !(strpos($etee, "@") AND strpos($etee, ".")) ){
        echo "Wrong Email Addresss.";
    }
else 
{
       
    if (isset($_POST['eteusername'])) 
      {
        $username = mysql_real_escape_string($_POST['eteusername']);

       if (!empty($username)) 
        {
            $username_query = mysql_query("SELECT *
                                           FROM teachers
                                           WHERE teusername = '$username'");
             $count=mysql_num_rows( $username_query);
             if($count==0)
              if(isset($_POST['eteemail']))
				$e = mysql_real_escape_string($_POST['eteemail']);
				  if (!empty($e)) 
         {
            $e_query = mysql_query("SELECT *
                                           FROM teachers
                                           WHERE teemail = '$e'");
             $ecount=mysql_num_rows( $e_query);
             if($ecount==0)
			 {



if(mysql_query("update teachers set tename='$eten',tefname='$etefn',temname='$etemn',teemail='$etee',temobile_no='$etem',tepreadd='$eteba',teperadd='$eteaa',teusername='$eteun',tepassword='$etepass',deptname='$edn' where id='$teid'"))
	{//echo "edited";
		$query = "SELECT uid from teachers where teusername = '$eteun' and tepassword = '$etepass' order by id desc limit 1";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$uid=$row['uid'];
		}
		$query="update users set name='$eten',email='$etee',mobile_no='$etem',username='$eteun',password='$etepass' where id='$uid'";
		$r=mysql_query($query,$link);
		if($r)
			echo "Edited Successfully";
	}
else
	echo "Not Edited";
	
	
			  }
			   else
				echo "Email Already Exsist";
         }
            else
            {
              echo "Username Already Exsist";
              //exit;
            }
        }
	  }    
}	
include "show_te.php";
?>
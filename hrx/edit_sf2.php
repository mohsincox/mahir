<?php
include_once("header.php");
?>


<center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$esfn=$_POST["esfname"];
$esffn=$_POST["esffname"];
$esfmn=$_POST["esfmname"];
$esfe=$_POST["esfemail"];
$esfm=$_POST["esfmobile_no"];
$esfba=$_POST["esfpreadd"];
$esfaa=$_POST["esfperadd"];

$esfun=$_POST["esfusername"];
$esfpass=$_POST["esfpassword"];
$sfid=$_POST["sfid"];

if( !(strpos($esfe, "@") AND strpos($esfe, ".")) ){
        echo "Wrong Email Addresss.";
    }
else 
{
       
    if (isset($_POST['esfusername'])) 
      {
        $username = mysql_real_escape_string($_POST['esfusername']);

       if (!empty($username)) 
        {
            $username_query = mysql_query("SELECT *
                                           FROM staffs
                                           WHERE sfusername = '$username'");
             $count=mysql_num_rows( $username_query);
             if($count==0)
              if(isset($_POST['esfemail']))
				$e = mysql_real_escape_string($_POST['esfemail']);
				  if (!empty($e)) 
         {
            $e_query = mysql_query("SELECT *
                                           FROM staffs
                                           WHERE sfemail = '$e'");
             $ecount=mysql_num_rows( $e_query);
             if($ecount==0)
			 {



if(mysql_query("update staffs set sfname='$esfn',sffname='$esffn',sfmname='$esfmn',sfemail='$esfe',sfmobile_no='$esfm',sfpreadd='$esfba',sfperadd='$esfaa',sfusername='$esfun',sfpassword='$esfpass' where id='$sfid'"))
	{//echo "edited";
		$query = "SELECT uid from staffs where sfusername = '$esfun' and sfpassword = '$esfpass' order by id desc limit 1";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$uid=$row['uid'];
		}
		$query="update users set name='$esfn',email='$esfe',mobile_no='$esfm',username='$esfun',password='$esfpass' where id='$uid'";
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
              echo "Username Already Exsists";
              //exit;
            }
        }
	  }    
}
	
include "show_sf.php";
?>
</center>
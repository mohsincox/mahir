<?php
include_once("header.php");
?>


<?php


$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$en=$_POST["ename"];
$ee=$_POST["eemail"];
$em=$_POST["emobile_no"];
$eun=$_POST["eusername"];
$id=$_POST["userid"];

if( !(strpos($ee, "@") AND strpos($ee, ".")) ){
        echo "Wrong Email Addresss.";
    }
else 
{
       
    if (isset($_POST['eusername'])) 
      {
        $username = mysql_real_escape_string($_POST['eusername']);

       if (!empty($username)) 
        {
            $username_query = mysql_query("SELECT *
                                           FROM users
                                           WHERE username = '$username'");
             $count=mysql_num_rows( $username_query);
             if($count==0)
              if(isset($_POST['eemail']))
				$e = mysql_real_escape_string($_POST['eemail']);
				  if (!empty($e)) 
         {
            $e_query = mysql_query("SELECT *
                                           FROM users
                                           WHERE email = '$e'");
             $ecount=mysql_num_rows( $e_query);
             if($ecount==0)
			 {


if(mysql_query("update users set name='$en',email='$ee',mobile_no='$em',username='$eun' where id='$id'"))
	echo "edited";
	
else
	echo "not edited";
	
	
	
	
			  }
			   else
				echo "email exsist";
         }
            else
            {
              echo "Username already exsists";
              //exit;
            }
        }
	  }    
}

?>
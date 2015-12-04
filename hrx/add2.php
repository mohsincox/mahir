<?php
include_once("header.php");
?>

<?php

$link=mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());
$name=$_POST["name"];
$email=$_POST["email"];
$mb_no=$_POST["mobile_no"];
$desi=$_POST["designition"];
$un=$_POST["username"];
$pass=$_POST["password"];
$cr_at=$_POST["created_at"];
$cr_by=$_POST["created_by"];



 
if( !(strpos($email, "@") AND strpos($email, ".")) ){
        echo "Wrong Email Addresss.";
    }
else 
{
       
    if (isset($_POST['username'])) 
      {
        $username = mysql_real_escape_string($_POST['username']);

       if (!empty($username)) 
        {
            $username_query = mysql_query("SELECT *
                                           FROM users
                                           WHERE username = '$username'");
             $count=mysql_num_rows( $username_query);
             if($count==0)
              if(isset($_POST['email']))
				$e = mysql_real_escape_string($_POST['email']);
				  if (!empty($e)) 
         {
            $e_query = mysql_query("SELECT *
                                           FROM users
                                           WHERE email = '$e'");
             $ecount=mysql_num_rows( $e_query);
             if($ecount==0)
			 {
			 
			 
			 
               $query="INSERT INTO users(name,email,mobile_no,designition,username,password,created_at,created_by) VALUES('$name','$email','$mb_no','$desi','$un','$pass',NOw(),'$cr_by')";		
			   $r=mysql_query($query,$link);
  
               if($r)
		          print" Inserted ";
	           else
	              print "Not Inserted";
               //exit;
			  
			  
			  
			  
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
	  /*	  if(isset($_POST['email']))
				$e = mysql_real_escape_string($_POST['email']);
				  if (empty($e))
				  {
					$query="INSERT INTO users(name,email,mobile_no,designition,username,password,created_at,created_by) VALUES('$name','$email','$mb_no','$desi','$un','$pass','$cr_at','$cr_by')";		
			   $r=mysql_query($query,$link);
  
               if($r)
		          print" Inserted ";				  
	           else
	              print "Not Inserted";
				  }      
				  */
	  }    
}

/*$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}*/

?>

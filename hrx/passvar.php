<?php
include_once("header.php");
?>
<center>
<?php
//session_start();
//include 'dbconfig.php';
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

	//$id=$_REQUEST["userid"];
		$username = $_POST['username'];
        $password = $_POST['oldpass'];
        $newpassword = $_POST['newpass'];
        $confirmnewpassword = $_POST['conpass'];
		//$uid=$_POST['userid'];
        $result = mysql_query("SELECT password FROM users WHERE username='$username'");
	while($row=mysql_fetch_array($result))
	{
	  
	 
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
	}
        if($newpassword==$confirmnewpassword)
        
		$sql=mysql_query("UPDATE users SET password='$newpassword' where username='$username'");
        if($sql)
        {
          echo "Congratulations You have successfully changed your password";
        }
       else
        {
          echo "Passwords do not match";
        }
	  	
      ?>
	  </center>
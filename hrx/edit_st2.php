<?php
include_once("header.php");
?>

<center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$estn=$_POST["estname"];
$estfn=$_POST["estfname"];
$estmn=$_POST["estmname"];
$este=$_POST["estemail"];
$estm=$_POST["estmobile_no"];
$estba=$_POST["estpreadd"];
$estaa=$_POST["estperadd"];
$ec=$_POST["eclass"];
$eg=$_POST["egroup"];
$estun=$_POST["estusername"];
$estpass=$_POST["estpassword"];
$stid=$_POST["stid"];
if( !(strpos($este, "@") AND strpos($este, ".")) ){
        echo "Wrong Email Addresss.";
    }
else 
{
       
    if (isset($_POST['estusername'])) 
      {
        $username = mysql_real_escape_string($_POST['estusername']);

       if (!empty($username)) 
        {
            $username_query = mysql_query("SELECT *
                                           FROM students
                                           WHERE stusername = '$username'");
             $count=mysql_num_rows( $username_query);
             if($count==0)
              if(isset($_POST['estemail']))
				$e = mysql_real_escape_string($_POST['estemail']);
				  if (!empty($e)) 
         {
            $e_query = mysql_query("SELECT *
                                           FROM students
                                           WHERE stemail = '$e'");
             $ecount=mysql_num_rows( $e_query);
             if($ecount==0)
			 {


if(mysql_query("update students set stname='$estn',stfname='$estfn',stmname='$estmn',stemail='$este',stmobile_no='$estm',stpreadd='$estba',stperadd='$estaa',class='$ec',`group`='$eg',stusername='$estun',stpassword='$estpass' where id='$stid'"))
	{//echo "edited";
		$query = "SELECT uid from students where stusername = '$estun' and stpassword = '$estpass' order by id desc limit 1";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$uid=$row['uid'];
		}
		$query="update users set name='$estn',email='$este',mobile_no='$estm',username='$estun',password='$estpass' where id='$uid'";
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
include "show_st.php";
?>
</center>
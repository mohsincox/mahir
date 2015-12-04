<?php
session_start();

if(!isset ($_SESSION['u_name']))
{
	header("location: /cms/log.php");
	exit;
} 
?>

<?php
//include("header.php");
?>
<center>
<?php
//session_start();
session_destroy();
echo "<h1>Log Out Successfully</h1>";
?>
</center>

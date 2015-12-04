<?php
include_once("header.php");
?>
<center>
<?php
$link=mysql_connect("localhost","root","") or die ("can not connect");
mysql_select_db("cms",$link) or die(mysql_error());

$id=$_REQUEST["id"];


	
		$query="SELECT uid from students where id=$id order by id desc limit 1";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$uid=$row['uid'];
			//echo $uid;
		}
		if(mysql_query("delete from users where id='$uid'"))
			if(mysql_query("delete from students where id=$id"))
				echo "Deleted Successfully";
	
			else
				echo "Not Deleted";

include "show_st.php";
?>
</center>
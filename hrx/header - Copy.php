<?php
session_start();
error_reporting (0);
if(!isset ($_SESSION['u_name']))
{
	header("location: /cms/index.php");
	exit;
} 
?>

<style>
/*
body {
  font-family: 'Lucida Grande', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  padding: 20px 50px 150px;
  font-size: 13px;
  text-align: center;
  background: #E3CAA1;
}
*/
.header
	{	
		margin:0px;
		margin-bottom:0px !important;
		height:100px;
		background-color:#d0e4fe;
		overflow:hidden;
	}
.sp{
  background: #fff; 
  display: block; 
  color: #555;
  text-shadow: 0 -1px 0 #000;
}
#navmenu {
  font-family: 'Lucida Grande', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  margin: 0;
  padding: 20px 50px 20px;
  font-size: 13px;
  text-align: center;
  background: #E3CAA1;
}
ul {
  text-align: left;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
ul li{
  font: bold 12px/18px sans-serif;
  display: inline-block;
  margin-right: -4px;
  position: relative;
  padding: 15px 20px;
  background: #fff;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
ul li a {
  color: #fff;
  text-decoration:none;
}

ul li:hover {
  background: #555;
  color: #fff;
}
ul li ul {
  padding: 0;
  position: absolute;
  top: 48px;
  left: 0;
  width: 150px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
ul li ul li { 
  background: #555; 
  display: block; 
  color: #fff;
  text-shadow: 0 -1px 0 #000;
}

ul li ul li:hover { background: #666; }
ul li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}
</style>

		<div class="header">
			<h1><center>College Management System</center></h1>
		</div>
<div id="navmenu">
	<ul><li>Home</li>
	  <li><a class="sp" href="show.php">About</a></li>
	  <li>
		User
		<ul>
		  <li><a href="show.php">Show User</a></li>
		</ul>
	  </li>
	  <li>
	    Students
		<ul>
		  <li><a href="add_st.php">Add Student</a></li>
		  <li><a href="show_st.php">Show Student</a></li>
		</ul>
	  </li>
	  <li>
	    Teachers
		<ul>
		  <li><a href="add_te.php">Add Teacher</a></li>
		  <li><a href="show_te.php">Show Teacher</a></li>
		</ul>
	  </li>
	  <li>
	    Stuffs
		<ul>
		  <li><a href="add_sf.php">Add Stuff</a></li>
		  <li><a href="show_sf.php">Show Stuff</a></li>
		</ul>
	  </li>
	  <li>
	    Departments
		<ul>
		  <li><a href="add_dept.php">Add Dept.</a></li>
		  <li><a href="show_dept.php">Show Dept.</a></li>		  	  
		</ul>
	  </li>
	  <li>
	    Subjects
		<ul>
		  <li><a href="add_sub.php">Add Subject</a></li>
		  <li><a href="Show_sub.php">Show Subject</a></li>
		  <li><a href="sub_te.php">Assign Subject</a></li>		   
		</ul>
	  </li>
	  <li>
	    Notice
		<ul>
		  <li><a href="add_no.php">Add Notice</a></li>	
		  <li><a href="show_no.php">Show Notice</a></li>
		</ul>
	  </li>
	  <li>Contact</li>
	  <li><a href="log_out.php">Log out</a></li>
	</ul>
</div>
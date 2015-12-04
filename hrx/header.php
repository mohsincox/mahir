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

* {margin:0;padding:0}
.fix{overflow:hidden;
  width:1060px;
    margin:0px auto;}
	
.header{margin-top:10px;
margin-bottom:5px}
.slider{height:213px; width:1060px;
background:url(images/slider.jpg)
no-repeat}
.slider_text{color: #fff;
line-height: 30px;
margin-left:70px;
margin-top: 35px;}
.slider_text h1{}
.slider_text h2{color: #FF0000}
.slider_text h3{}

#navmenu {
  font-family: 'Lucida Grande', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  margin: 0;
  padding: 20px 50px 20px;
  font-size: 13px;
  text-align: center;
  background: #E3CAA1;
  
  width:960px;
  margin:5px auto;
  disply:block;
 
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
  background: black;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
 border-right:1px solid #ddd; 
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

<div class="fix header">
				<img src="images/logo.jpg" alt=""/>
			</div>	
<div class="fix slider">
				<div class="slider_text">
					<h1>College Managenent System</h1>
					<h2>Project</h2>
					<h4>By Mohsin Iqbal</h4>
				</div>
			</div>			
<div id="navmenu">
	<ul><li><a href="header.php">Home</a></li>
	  
	  <li><a href="">
		User</a>
		<ul>
		  <li><a href="show.php">Show User</a></li>
		</ul>
	  </li>
	  <li><a href="">
	    Students</a>
		<ul>
		<?php
		if(($_SESSION['usertype'] == "Teacher") || ($_SESSION['usertype'] == "Staff"))
		{
		?>
		  <li><a href="add_st.php">Add Student</a></li>
		<?php
		}
		?> 
		  <li><a href="show_st.php">Show Student</a></li>
		</ul>
	  </li>
	  <li><a href="">
	    Teachers</a>
		<ul>
		<?php
		if($_SESSION['usertype'] == "Teacher")
		{
		?>
		  <li><a href="add_te.php">Add Teacher</a></li>
		<?php
		}
		?>  
		  <li><a href="show_te.php">Show Teacher</a></li>
		</ul>
	  </li>
	  <li><a href="">
	    Stuffs</a>
		<ul>
		<?php
		if($_SESSION['usertype'] == "Teacher")
		{
		?>
		  <li><a href="add_sf.php">Add Stuff</a></li>
		<?php
		}
		?>
		  <li><a href="show_sf.php">Show Stuff</a></li>
		</ul>
	  </li>
	  <li><a href="">
	    Departments</a>
		<ul>
		<?php
		if($_SESSION['usertype'] == "Teacher")
		{
		?>
		  <li><a href="add_dept.php">Add Dept.</a></li>
		<?php
		}
		?>  
		  <li><a href="show_dept.php">Show Dept.</a></li>		  	  
		</ul>
	  </li>
	  <li><a href="">
	    Class</a>
		<ul>
		<?php
		if($_SESSION['usertype'] == "Teacher")
		{
		?>
		  <li><a href="add_cls.php">Add Class</a></li>
		<?php
		}
		?>  
		  <li><a href="show_cls.php">Show Class</a></li>		  	  
		</ul>
	  </li>
	  <li><a href="">
	    Subjects</a>
		<ul>
		<?php
		if($_SESSION['usertype'] == "Teacher")
		{
		?>
		  <li><a href="add_sub.php">Add Subject</a></li>
		<?php
		}
		?> 
		  <li><a href="Show_sub.php">Show Subject</a></li>
		<?php
		if($_SESSION['usertype'] == "Teacher")
		{
		?>
		  <li><a href="sub_te.php">Assign Subject</a></li>	
		<?php
		}
		?>   
		</ul>
	  </li>
	  <li><a href="">
	    Notice</a>
		<ul>
		<?php
		if(($_SESSION['usertype'] == "Teacher") || ($_SESSION['usertype'] == "Staff"))
		{
		?>
		  <li><a href="add_no.php">Add Notice</a></li>
		<?php
		}
		?>   
		  <li><a href="show_no.php">Show Notice</a></li>
		</ul>
	  </li>
	  <li><a href="">
		Others</a>
		<ul>
		  <li><a href="passcng.php">Password Change</a></li>	
		  <li><a href="contact.php">Contact</a></li>
		</ul>
	  </li>
	  <li><a href="log_out.php">Log out</a></li>
	</ul>
</div>


<html>
<head>
	<style type="text/css">
	.header
	{	
		margin:-20px;
		margin-bottom:0px !important;
		height:100px;
		background-color:#d0e4fe;
		overflow:hidden;
	}

	.mainmenu ul{margin:0;padding:0;list-style:none;overflow:hidden;}
	.mainmenu li{float:left;border-right:1px solid red}
	.mainmenu li a{disply:block;padding:10px;background:#EDEDED;color:#000;text-decoration:none}
	.mainmenu li a:hover{background:green}
	.hidden{}
	.hidden{}
	.hidden{}
	.hidden{}
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
</head>
<body>
	<div class="main">
		<div class="header">
			<h1><center>College Management System</center></h1>
		</div>
		<div class="mainmenu">
				<ul>
					<li>
						<a href="">Users</a>
						<ul class="hidden">
	
							<li><a href="show.php">Show User</a></li>
							<li><a href="passcng.php">Change Password</a></li>
						</ul>
					</li>
						
					<li>
						<a href="show_st.php">Students</a>
						
					</li>
					<li>
						<a href="">Teachers</a>
						<ul class="hidden">
							<li><a href="add_te.php">Add Teacher</a></li>
							<li><a href="show_te.php">Show Teacher</a></li>
							
						</ul>
					</li>
					<li>
						<a href="">Staffs</a>
						<ul class="hidden">
							<li><a href="add_sf.php">Add Staff</a></li>
							<li><a href="show_sf.php">Show Staff</a></li>
							
						</ul>
					</li>
					<li>
						<a href="">Departments</a>
						<ul class="hidden">
							<li><a href="show_ssci.php">Science</a></li>
							<li><a href="show_shum.php">Humanities</a></li>
							<li><a href="show_sbus.php">Business Studies</a></li>
							
						</ul>
					</li>
					<li><a href="show_sub.php">All Subjects</a></li>
					<li><a href="show_no.php">All Notices</a></li>
					<li><a href="sub_tea.php">Subject to Teacher</a></li>
					<li><a href="log_out.php">Log out</a></li>
				</ul>
			</div>
		
	</div>

</body>
</html>

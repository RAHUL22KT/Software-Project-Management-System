<?php   
    session_start();  
    if(!isset($_SESSION["sess_user"]))
    {  
        header("location:admin_login.php");  
    } 
    else 
    {
	?>

	<!DOCTYPE html>
	<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="style-1.css">
		<link rel="stylesheet" type="text/css" href="style-2.css">
		<title>Admin profile</title>
	</head>
	<body>

		<div class="div0">
			<fieldset class="box0">
				<legend>Personal info</legend>
				<div>
					<img src="images/avatar.png">
				</div>
				<div class="name">
					<h1>Hello, <?=$_SESSION['sess_user'];?></h1>
					<p>XYZ Co. Ltd.</p>
				</div>
				<div>
					<form action="admin_logout.php" method="POST">
						<button class="logout" name="logout" onclick="logout.php"type="submit" value="">Logout</button>
					</form>
				</div>
			</fieldset>
		</div>



		<div class="div1">
			<fieldset class="box1">
				<legend>Project info</legend>
				<div class="topnav">
					<a href="#home" class="active">Account</a>
					<div id="myLink0">
						<a href="#news">Update</a>
					    <a href="#contact">Current</a>
					    <a href="#about">Forum</a>
					</div>
					<a href="javascript:void(0);" class="icon" onclick="myFunction0()">
					</a>
				</div><br>
				<div class="topnav">
					<a href="#home" class="active">Emp. Details</a>
					<div id="myLink2">
						<a href="#news">General</a>
					    <a href="#contact">Attendence</a>
					    <a href="#about">Track Progress</a>
					</div>
					<a href="javascript:void(0);" class="icon" onclick="myFunction2()">
					</a>
				</div>
			</fieldset>
		</div>



		<div class="div2">
			<fieldset class="box2">
				<legend>New Account</legend>
				<form  action="javascript:void(0);" method="POST">
					
					<button class="sendemail"  style="top:25px ;left:235px" onclick="myFunction1()">Add New Member</button>
				
				</form>

					<div id="myLink1" class="login-box">
			    	
				    	<img src="images/avatar.png" class="avatar">
				        <h1 style="text-align: center;">Register Here</h1>

			            <form action="logdb.inc.php" method="POST">

				            <p>Username</p>
				            <input type="text" name="user" placeholder="Enter Username">
				            
				            <p>Password</p>
				            <input type="password" name="pass" placeholder="Enter Password">

				            <p>Group</p>
				            <input type="text" name="grp" placeholder="Enter Group">
							   <p>Position</p>
				            <input type="text" name="position" placeholder="Enter Post">

			            	<input type="submit" name="submit" value="Register">

		            	</form>
		        	</div>
			</fieldset>
		</div>


		<div class="div3">
			
			<fieldset class="box4">
				<legend>Latest Notifications...</legend>
			</fieldset>

			<form  action="" method="POST">
				<button  class="sendemail"  style="top:25px"name="email" type="" value="">Send Email</button>
			</form>
			
		</div>
		
</body>
	<script>

	function myFunction0() {
		var x = document.getElementById("myLink0");
	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	  	} else {
	    	x.style.display = "block";
	  	}
	}
	function myFunction1() {
		var x = document.getElementById("myLink1");
	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	  	} else {
	    	x.style.display = "block";
	  	}
	}
	function myFunction2() {
		var x = document.getElementById("myLink2");
	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	  	} else {
	    	x.style.display = "block";
	  	}
	}
	function myFunction3() {
		var x = document.getElementById("myLink3");
	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	  	} else {
	    	x.style.display = "block";
	  	}
	}
	</script>
	</html>
	<?php
	}
	?>

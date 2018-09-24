<!DOCTYPE html>
<?php
include 'dbh.inc.php';
session_start();
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<link rel="stylesheet" type="text/css" href="style-3.css">
	<title>Account</title>
	<link>
</head>
<body style="background-image:url(images/6.jpg)">


	<div class="div0">
		<fieldset class="box0">
			<legend>Personal info</legend>
			<div>
				<img src="images/avatar.png">
			</div>
			<div class="name">
				<h1>Hello, <?php $_SESSION['sess_user']?></h1>
				<p>Company_name</p>
			</div>
			<div>
				<button class="logout" name="email" type="" value="">Logout</button>
			</div>
		</fieldset>
	</div>




	<div class="div1">
		<fieldset class="box1">
			<legend>Update Information</legend>
			<form action="" method="">
				
				<label>Name</label>
				<input class="box" type="text" name="name" placeholder="Enter New Name">
				<button>update</button><br><br>


				<label>DOB</label>
				<input class="box" type="text" name="name" placeholder="Enter New DOB">
				<button>update</button><br><br>

				
				<label>E-mail</label>
				<input class="box" type="text" name="name" placeholder="Enter New E-mail">
				<button>update</button><br><br>

			</form>
		</fieldset>
	</div>




	<div class="div2">
		<fieldset class="box7">
			<legend>Account Details</legend>
			<p>Name :</p>
			<p>DOB  :</p>
			<p>Contact Number :</p>
			<p>E-mail :</p>
			<p>Permanent Address :</p>
		</fieldset>
	</div>




	<div class="div3">
		<fieldset class="box4">
			<legend>Update Information</legend>
			<form action="general.inc.php" method="POST">
				<label>Profile Picture<label><br>
				<input type="file" name="name" placeholder="Upload Your Picture Here">
				<br><button>update</button><br><br>

				<label>Temp. Address</label>
				<input class="textbox" type="text" name="name" placeholder="Enter New Temp. Address">
				<br><button>update</button><br><br>

				<label>Perm. Address</label>
				<input class="textbox" type="text" name="name" placeholder="Enter New Perm. Address">
				<br><button>update</button><br><br>

				<label>Mobile No.</label>
				<input class="textbox" type="text" name="name" placeholder="Enter New Mobile No.">
				<br><button>update</button><br><br>

			</form>
		</fieldset>
	</div>

</body>
</html>
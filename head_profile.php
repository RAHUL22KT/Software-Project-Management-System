<?php   
    include 'dbh.inc.php';
    session_start();  
    if(!isset($_SESSION["sess_user"]))
    {  
        header("location:head_login.php");  
    } 
    else 
    {
		if($con){
		mysqli_select_db($con,'profile') or die("cannnot connect to db");
		$flag=1;
		$user=$_SESSION['sess_user'];
		$sql=" SELECT * FROM head_profile WHERE username='$user' ";
		$result=mysqli_query($con,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck){
			if($row=mysqli_fetch_assoc($result)){
				$image=$row['image'];
			}
		}
	}
	else{
		$flag=0;
		echo "Connection cannot be established";
		echo "<script>setTimeout(\"location.href = 'employee_login.php';\",2500);</script>";
	}
	?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Head profile</title>
</head>
<body style="background-image: url(images/8.jpg);">

	<div class="div0">
		<fieldset class="box0">
			<legend>Personal info</legend>
			<div>
				<?php 
				if($flag==1)
				{echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>';} 
				else echo '<img src="images/avatar.png">';
				?>
			</div>
			<div class="name">
				<h1>Hello,  <?=$_SESSION['sess_user'];?></h1>
				<p>Company_name</p>
			</div>
			<div>
				<form action="head_logout.php" method="POST">
					<button class="logout" name="logout" type="submit" value="">Logout</button>
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
				<a href="#home" class="active">Project</a>
				<div id="myLink1">
					<a href="#news">General</a>
				    <a href="#contact">Current</a>
				    <a href="#about">Forum</a>
				</div>
				<a href="javascript:void(0);" class="icon" onclick="myFunction1()">
				</a>
			</div><br>
			<div class="topnav">
				<a href="#home" class="active">Emp. Details</a>
				<div id="myLink2">
					<a href="head_general.php">General</a>
				    <a href="#contact">Attendence</a>
				    <a href="#about">Track Progress</a>
				</div>
				<a href="javascript:void(1);" class="icon" onclick="myFunction2()">
				</a>
			</div>
		</fieldset>
	</div>




	<div class="div2">
		<div>
			<fieldset class="box2">
				<legend>Today's Task</legend>
			</fieldset>
		</div>
		<div>
			<fieldset class="box2">
				<legend>Panding Task</legend>
			</fieldset>
		</div>
		<div>
			<fieldset class="box2">
				<legend>Upcoming Task</legend>
			</fieldset>
		</div>
	</div>




	<div class="div3">
		<fieldset class="box4" style="top:0px">
			<legend>Ask Questions...</legend>
			<textarea class="box3" rows=5 cols=30>
			</textarea>
		</fieldset>

			<div class="topnav" style="width:150px;top:20px">
				<a class="active">Team Members</a>
				<div id="myLink3">
					<a href="general.php">1</a>
				    <a href="attendece.php">2</a>
				    <a href="track_progress.php">3</a>
				</div>
				<a class="icon" onclick="myFunction3()">
				</a>
			</div>

			<div class="box6">
				<form  action="" method="POST">
					<button class="manager"  name="manage" type="" value="">Manager</button><br>
				</form>
			</div>

			<form  action="" method="POST">
				<button  class="sendemail" name="email" type="" value="">Send Email</button>
			</form>

		<fieldset class="box4">
			<legend>Latest Notifications...</legend>
		</fieldset>
		
	</div>

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
</body>
</html>
<?php
	}
	?>
<?php
include 'dbh.inc.php';  
  if($con){
	mysqli_select_db($con,'user_registration') or die("cannot select db");  
	$post=$_POST['position'];
	$group=$_POST['grp'];
	$user=$_POST['user'];
	$pass=md5($_POST['pass']);
	
	$emp='employee';
	$man='manager';
	$head='head';
	$flag=0;
    if(strcasecmp($post,$emp)==0){	
		$sqltest="SELECT username FROM emp_login where emp_login.username='$user';";
		$sql="INSERT INTO emp_login (phase,username,password) values ('$group','$user','$pass');";
		$flag=1;
	}
	else if(strcasecmp($post,$man)==0){
		$sqltest="SELECT username FROM manager_login where manager_login.username='$user';";
		$sql="INSERT INTO manager_login (phase,username,password) values ('$group','$user','$pass');";
		$flag=1;
	}
	else if(strcasecmp($post,$head)==0){
		$sqltest="SELECT username FROM head_login where head_login.username='$user';";
		$sql="INSERT INTO head_login (phase,username,password) values ('$group','$user','$pass');";
		$flag=1;
	}
	else{
		echo "Enter correct post"."<br>"."Taking you back to profile page";
        echo "<script>setTimeout(\"location.href = 'admin_profile.php';\",2500);</script>";
	}
	if($flag==1){
	$result=mysqli_query($con,$sqltest);
	$resultcheck=mysqli_num_rows($result);
	if($resultcheck!=0){
		echo "username already exist"."<br>"."Taking you back to profile page";
        echo "<script>setTimeout(\"location.href = 'admin_profile.php';\",2500);</script>";		
	}
	
	else{
		if(isset($_POST['submit'])){
			if(mysqli_query($con,$sql)){
				mysqli_select_db($con,'profile');
			if(strcasecmp($post,$emp)==0){
				$sql="INSERT INTO emp_profile (username,phase) VALUES ('$user','$group');";
				$flag=0;
			}
			else if(strcasecmp($post,$man)==0){
				$sql="INSERT INTO manager_profile (username,phase) VALUES ('$user','$group');";
				$flag=0;
			}
			else if(strcasecmp($post,$head)==0){
				$sql="INSERT INTO head_profile (username,phase) VALUES ('$user','$group');";
				$flag=0;
			}
			if($flag==0){
				if(mysqli_query($con,$sql)){
						header("Location: admin_profile.php?registration=SUCCESS");
				}
			}	
		}
		else{
			header("refresh 2;url=admin_profile.php");
			echo "Unsuccessful".die("query failed");
			}
		}
	}
   }
  }  
  else{
		echo "unable to connect to db"."<br>"."Taking you back to profile page";
		echo "<script>setTimeout(\"location.href = 'admin_profile.php';\",2500);</script>";
		die(mysqli_error($con));
	}
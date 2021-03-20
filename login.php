<?php
include "connection.php";
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
	$username =($_POST['username']);
	$password =($_POST['password']);
	if(empty($username)){
		header("location:main.php?error=User Name is required");
		exit();
	}else if(empty($password)){
		header("location:main.php?error=Password is required");
		exit();
	}else{
		$sql ="select * from customer where username ='$username' and password ='$password'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result )===1){
			$row = mysqli_fetch_assoc($result);
			if($row['username'] === $username && $row['password'] === $password){
			 $_SESSION['username'] =$row['username'];
			 $_SESSION['password'] =$row['password'];
			 $_SESSION['email'] =$row['email'];
			 $_SESSION['mobile'] =$row['mobile'];
			 $_SESSION['address'] =$row['address'];
			 $_SESSION['country'] =$row['country'];
			 $_SESSION['gender'] =$row['gender'];
			 $_SESSION['bio'] =$row['bio'];
			 header("location:welcome.php?");
			
			}else{
			header("location:main.php?error=Invalid Username or Password");
		    exit();
			}
		}else{
			header("location:main.php?error=Invalid Username or Password");
		}    exit();
	}
}else{
	header("loacation:main.php");
	exit();
}


?>
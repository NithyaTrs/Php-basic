<?php include "connection.php";
session_start();
$mysqli = new mysqli('localhost','root','','mydb')or die(mysqli_error($mysqli));
$update=false;
$id=0;
$username='';
$email ='';
$mobile ='';
$address='';
$errors = array();

if(isset($_POST['save'])){
    $username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address =$_POST['address'];
	$country =$_POST['country'];
	$gender = $_POST['gender'];
	$mysqli -> query("insert into customer (username ,password, email, mobile, address,country,gender) values ('$username' ,'$password', '$email', '$mobile','$address','$country','$gender')") or die($mysqli -> error);
    $_SESSION['message'] = "Registered Successfully !!";
	$_SESSION['msg_type'] = "success";
	header("location: register.php");
	
}

?>
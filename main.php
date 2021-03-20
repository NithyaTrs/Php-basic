<?php
include "first.php";

?>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.required
{
    color: red;
}
.error{
	background:black;
	color : white;
	padding :10px;
	width : 25%;
	border-radius:15px;
	text-align : center;
	align-items:center;
}
	
</style>
</head>
<body>
<center>
<h1>Login<hr></h1></center>

<div class="container">
<?php if(isset($_GET['error'])){?>
<center><p class="error"><?php echo $_GET['error']; ?></p></center>
<?php } ?>
<div class= "row justify-content-center">

<form action ="login.php" method ="post">
<div class="form-group">
<label>UserName</label>&nbsp;<span class="required">*</span>
<input type="text" name="username" class="form-control" >
</div>
<div class="form-group">
<label>Password</label>&nbsp;<span class="required">*</span>
<input type="password" name="password" class="form-control" >
</div>
New User?<a href="register.php">Click Here to Register</a><br><br>
<div class="form-group">
<button type ="submit" class="btn btn-primary" name="login">Login</button>
</div>
</body>
</div>
</html>

	
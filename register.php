<?php require_once "first.php" ?>
<html>
<head>
<title>CRUD Operations</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.required
{
    color: red;
}
</style>
</head>
<body>



<div class="container">
<?php include "process.php" ?>
<?php
if(isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php 
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php endif; ?>



<div class= "row justify-content-center">
<form   method ="post">
<div class="form-group">
<label>UserName</label>&nbsp;<span class="required">*</span>
<input type="text" name="username" class="form-control"  required>
</div>
<div class="form-group">
<label>Password</label>&nbsp;<span class="required">*</span>
<input type="password" name="password" class="form-control"  required>
</div>
<div class="form-group">
<label>Email</label>&nbsp;<span class="required">*</span>
<input type="email" name="email" class="form-control"  required>
<p class="text-danger"><?php if(isset($errors['dup'])) echo $errors['dup'] ; ?> </p>
</div>
<div class="form-group">
<label>Mobile</label>&nbsp;<span class="required">*</span>
<input type="text" name="mobile" class="form-control"  required><br>
</div>

<div class="form-group">
<label>Address</label>
<textarea name="address" class="form-control"  ></textarea>
</div>
<div class="form-group">
<label>Country</label>
<select name="country" class="form-control" >
<option value="sel">Select Country</option>
<option value="India">India</option>
<option value="Australia">Australia</option>
<option value="USA">USA</option>
<option value="Germany">Germany</option>
<option value="England">England</option>
</select>
</div>
<div class="form-group">
<label>Gender</label>&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender"  value="Male" >Male</input>&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender"  value="Female" >Female</input>
</div>
Already Registered? <a href="main.php">Click Here to Login</a><br><br>
<div class="form-group">
<button type ="submit" class="btn btn-primary" name="save">Register</button><br><br>
</div>

</form>
</body>
</html>

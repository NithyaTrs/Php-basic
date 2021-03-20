<?php require_once "header.php" ?>
<?php



?>	
<br><br>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<title>Home</title>
<style>
h1{
	text-align:center;
	color:red;
}
th{
    height: 50px;
}
</style>
<center><h1>Hello,<?php echo $_SESSION['username']; ?></h1></center>
<center>
<table border="1">
<tr>
<th>Name:</th><td><?php echo $_SESSION['username']; ?><br></td>
</tr>
<tr>
<th>Password:</th><td><?php echo $_SESSION['password']; ?><br></td>
</tr>
<tr>
<th>Email:</th> <td><?php  echo $_SESSION['email']; ?><br></td>
</tr>
<tr>
<th>Mobile:</th><td><?php  echo $_SESSION['mobile']; ?><br></td>
</tr>
<tr>
<th>Address:</th> <td><?php  echo $_SESSION['address']; ?><br></td>
</tr>
<tr>
<th>Country: </th><td><?php  echo $_SESSION['country']; ?><br></td>
</tr>
<tr>
<th>Gender:</th> <td><?php  echo $_SESSION['gender']; ?><br></td>
</tr>


</table><br><br>
</form>
<?php

?>


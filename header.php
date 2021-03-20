<?php
session_start();
$username =($_SESSION['username']);
include "connection.php";

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<title>Home</title>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Nithya's Export</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="nav navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="welcome.php">Profile</a>
</li>

<li class="nav-item active">
<a class="nav-link" href="logout.php">Logout</a>
</li>

</li>
</ul>
</nav>
</body>
</html>
<div class="footer">
  <p>All Rights Reserved 2020</p>
</div>	


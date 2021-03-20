<?php require_once "first.php";

if(isset($_GET['page']))
{
	$page = $_GET['page'];
}
else{
	$page =1;
}
$num_per_page =5;
$start =($page -1)*$num_per_page;

 ?>
 

<html>
<head>
<title>CRUD Operations</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php require_once "process.php"?>
<div class="container">
<?php
if(isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php 
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php endif; ?>
<?php

$mysqli = new mysqli('localhost','root','','mydb') or die(mysqli_error($mysqli));
$result = $mysqli -> query("select * from customer ORDER BY id DESC limit $start,$num_per_page") or die($mysqli -> error);

if(isset($_POST['search'])){
    $value_search = $_POST['value_search'];
    $result= $mysqli -> query("SELECT * FROM customer WHERE username LIKE '%".$value_search."%'");
	
}


?><br><br>




<table >
<tr>
<td>
<form action="test.php" method="post" name="searchform">
<input type="text" name="value_search" placeholder="Search by Name..">
<input type="submit" name="search" value="Search" class ="btn btn-primary">
</form></td>
</tr>
</table>

<div class="container">
<div class ="row justify-content-center">
<table class ="table">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Address</th>
<th>Country</th>
<th>Gender</th>
</tr>
</thead>

<?php 
while($row = $result ->fetch_assoc()):?>
<tr>
<td><?php echo $row['username']; ?> </td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['country']; ?></td>
<td><?php echo $row['gender']; ?></td>

</tr>
<?php endwhile ?>
</table>
</div>

<?php
function pre_r($array){
echo '<pre>';
print_r($array);
echo '</pre>';
}	
?>
</div>
<?php 
$pr_query ="select * from customer";
$pr_result = mysqli_query ($mysqli,$pr_query);
$total = mysqli_num_rows($pr_result);


$total_page = ceil($total/$num_per_page);
if($page>1)
{
	echo "<a href='test.php?page=".($page-1)."' class ='btn btn-info'>Previous</a>";
}
for($i=1;$i<$total_page;$i++){
	echo "<a href='test.php?page=".$i."' class ='btn btn-primary'>$i</a>";
}
if($i>$page)
{
	echo "<a href='test.php?page=".($page+1)."' class ='btn btn-info'>Next</a>";
}
?>


</body>
</html>
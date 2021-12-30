<?php
 $con = mysqli_connect("localhost","root","","projectdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id=$_REQUEST['id'];
$query = "DELETE FROM blog WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: layout.php"); 
?>
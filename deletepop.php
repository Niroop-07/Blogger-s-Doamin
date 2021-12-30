<?php
 $con = mysqli_connect("localhost","root","","projectdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$no=$_REQUEST['no'];
$query = "DELETE FROM popular WHERE no=$no"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: popular.php"); 
?>
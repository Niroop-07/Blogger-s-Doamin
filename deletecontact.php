<?php
 $con = mysqli_connect("localhost","root","","projectdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$slno=$_REQUEST['slno'];
$query = "DELETE FROM contact WHERE slno=$slno"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: usermessage.php"); 
?>
<html>
<head><title>View</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
footer {
   position:;
   bottom:0;
   width:100%;
   height:100px; 
   opacity:0.9;
}
td, th {
  border: 7px solid #dddddd;
  text-align: left;
  padding:2px;
}
a{text-decoration:none;}
button{background-color:#dddddd;}
h3{color:;}
footer {

   bottom:0;
   width:100%;
   height:100px;   
     opacity:0.9;
}
div.ex1 {
  background-color: ;
  width: 600px;
  height: 200px;
  overflow: scroll;
}
	
</style>
</head>
<body>
<div class="w3-left w3-hide-small">
  <h3> <a href="dashboard.php" class="w3-bar-item w3-button">BACK</a></h3>
	  </div>
<center><h1>Blogs</h1></center>
   <h2><div class="w3-right  w3-button w3-hide-small"><a href="input.php" class="w3-bar-item w3-button">
   <i class="fa fa-plus w3-xxlarge"></i>ADD</a></h2>
	 </div> </div><br/>
	  <br/>

<table>
  <tr>
    <th style="width:5px">Id</th>
    <th style="width:10%">Title</th>
    <th>Author</th>
	<th>Category</th>
	<th style="width:30%;">Description</th>
	<th>Image</th>
	<th>Operation </th>
  </tr>
  
<?php
session_start();
$con = mysqli_connect("localhost","root","","projectdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$count=1;
$sel_query="Select * from blog ORDER BY id asc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td><?php echo $count; ?></td>
	<td><?php echo $row["title"]; ?></td>
	<td><?php echo $row["author"]; ?></td>
	<td><?php echo $row["category"]; ?></td>
	<td><div class="ex1"><?php echo $row["description"]; ?></div></td>
	<td><?php echo "<img style=width:200px; height:200px src = images/".$row['image'];?>		
	</td><td><button><a href="up.php?id=<?php echo $row["id"]; ?>">Edit</a></button> <button> <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></button></td>
</tr>
<?php $count++; } ?>
 
</table>
 <footer class="w3-center w3-black w3-padding-16">
  <p>Reach us @: bloggersdomian.gmail.com</p>
  <p>Copyright:NS web-devlopers</p>
</footer>


</body>
</html>

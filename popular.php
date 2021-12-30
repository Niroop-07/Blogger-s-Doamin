<html>
<head><title>Popular Posts</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body{
    font-family: Helvetica;
   
    background: #e6ffff;
}
h2{
    text-align: center;
    font-size: 28px;
    text-transform: uppercase;
    color: #ff9933;
    padding: 30px ;
}
a{text-decoration:none;}
/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 20px;
    font-weight: normal;
    border-collapse: collapse;
    width: 100%;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 20px;
}

.fl-table td {
    border-right: 5px solid #f8f8f8;
    font-size: 20px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}
footer {
   position:
   bottom:0;
   width:100%;
   height:100px;   /* Height of the footer */
   background:#6cf;
   opacity:0.9;
}


</style>
</head>
<body><div class="w3-left w3-hide-small">
     <h3> <a href="dashboard.php" class="w3-bar-item w3-button">Back</a></h3>
	  </div></br>
	  </div></br>
<h2>Popular Posts</h2></br>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
			<th>Slno</th>
            <th>Title</th>
            <th>Author</th>
            <th>Image</th>
			<th>Operations</th>
            
   
        </tr>
        </thead>
        <tbody>
<?php
session_start();
$con = mysqli_connect("localhost","root","","projectdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$count=1;
$sel_query="Select * from popular;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td><?php echo $count; ?></td>
	<td><?php echo $row["title"]; ?></td>
	<td><?php echo $row["author"]; ?></td>
	<td><?php echo "<img style=width:200px; height:200px src = images/".$row['img'];?>
	</td><td><button><a href="deletepop.php?no=<?php echo $row["no"]; ?>">Delete</a></button></td>
</tr>
<?php $count++; } ?>
       
        <tbody>
    </table>
</div>
<footer class="w3-center w3-black w3-padding-16">
  <p>Reach us @: bloggersdomian.gmail.com</p>
  <p>Copyright:NS web-devlopers</p>
</footer>
</body>
</html>

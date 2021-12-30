<html>
<head><title>User Messages</title>
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
   position:absolute;
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
<h2>Messages</h2></br>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
			<th>Slno</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Comments</th>
			<th>Operation</th>
   
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
$sel_query="Select * from contact;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td><?php echo $count; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["subject"]; ?></td>
	<td><?php echo $row["comments"]; ?></td>
	<td><button><a href="deletecontact.php?slno=<?php echo $row["slno"]; ?>">Delete</a></button></td>
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


<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from blog where id='".$id."'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head><title>Update</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=file]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<?php
$status = "";	
if(count($_POST)>0)
{
$id=$_REQUEST['id'];
$title =$_REQUEST['title'];
$author =$_REQUEST['author'];
$category =$_REQUEST['category'];
$description =$_REQUEST['description'];
$image =$_REQUEST['image'];
$update="update blog set title='".$title."',author='".$author."', category='".$category."', description='".$description."', image='".$image."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
echo "<script>alert('Blog Updated Succesfully !!.')
            window.location.href='layout.php';
            </script>";
}else {
?>
<div class="w3-right w3-hide-small">
     <h3> <a href="dashboard.php" class="w3-bar-item w3-button">Home</a></h3>
	  </div><br>
	  
<h2>Blog Details</h2>

<div class="container">
  <form method="POST" action="" name="form" >
    <div class="row">
    <div class="col-25">
      <label for="id">ID</label>
    </div>
    <div class="col-75">
      <input type="hidden"  id="id" name="id" value="<?php echo $row['id'];?>" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="title">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" name="title" value="<?php echo $row['title'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="description">Author</label>
    </div>
    <div class="col-75">
      <input type="text" id="author" name="author"  value="<?php echo $row['author'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="category">Categorey</label>
    </div>
    <div class="col-75">
      <select name="category"> <option selected><?php echo $row['category'];?></option>
        <option>Lifestyle</option>
        <option >Technology</option>
        <option >Gaming</option>
		<option >Marvel</option>
		<option >Food</option>
		<option >Sports</option>
		<option >Travel</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Description</label>
    </div>
    <div class="col-75">
      <textarea style="height:200px" name="description"><?php echo $row['description'];?></textarea>
    </div>
  </div><div class="row">
    <div class="col-25">
      <label for="image">Image</label>
    </div>
  <div class="col-75">
    <input type="file" id="image" name="image" value="<?php echo $image ?>"><br/><br /><?php echo "<img style=width:100px; height:100px src = images/".$row['image'];?>  
    </div>	
	</div>
  <div class="row">
    <input type="submit" name="submit" value="Update">
  </div>
  </form>
<?php } ?>
</div>

</body>
</html>

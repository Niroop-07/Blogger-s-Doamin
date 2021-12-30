<!DOCTYPE html>
<html>
<head><title>Insert</title>
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
<div class="w3-left w3-hide-small">
     <h2> <a href="dashboard.html" class="w3-bar-item w3-button">Home</a></h2>
	  </div><br>
<center><h1>Blog Details</h1></center>

<div class="container">
  <form method="post">
  <div class="row">
    <div class="col-25">
      <label for="title">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" name="title" placeholder="Your title..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="description">Author</label>
    </div>
    <div class="col-75">
      <input type="text" id="author" name="author" placeholder="Author Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="category">Categorey</label>
    </div>
    <div class="col-75">
      <select id="category" name="category">
        <option value="lifestyle">Lifestyle</option>
        <option value="technology">Technology</option>
        <option value="gaming">Gaming</option>
		<option value="marvel">Marvel</option>
		<option value="food">Food</option>
		<option value="sports">Sports</option>
		<option value="fitness">Fitness</option>
		<option value="travel">Travel</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Description</label>
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Description" style="height:200px"></textarea>
    </div>
  </div><div class="row">
    <div class="col-25">
      <label for="image">Image</label>
    </div>
  <div class="col-75">
      <input type="file" id="image" name="image" >
    </div>
	</div>
  <div class="row">
    <input type="submit" name="insert" value="Submit">
  </div>
  </form>
</div>
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"projectdb");
if(isset($_POST['insert']))
{
$insert= mysqli_query($con,"insert into blog(title,author,category,description,image) values ('$_POST[title]','$_POST[author]','$_POST[category]','$_POST[description]','$_POST[image]')");
 
if($insert) {
echo "<script>alert('Blog succesfully added!!.')
            window.location.href='input.php';
            </script>";
            }
			else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
}
mysqli_close($con);
?>
</body>
</html>

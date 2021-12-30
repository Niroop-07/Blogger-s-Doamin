<?php
require('db.php');
include("auth.php");
?>
<?php
$count=1;
$sel_query="Select * from blog where id =8;";
$result = mysqli_query($con,$sel_query);
$row = mysqli_fetch_assoc($result);
$sel_query2="Select * from popular;";
$result2 = mysqli_query($con,$sel_query2);
$row2 = mysqli_fetch_assoc($result2);
$sel_query3="Select * from popular where id = 2;";
$result3= mysqli_query($con,$sel_query2);
$row3 = mysqli_fetch_assoc($result2);
$sel_query4="Select * from popular where id = 3;";
$result4 = mysqli_query($con,$sel_query2);
$row4 = mysqli_fetch_assoc($result2);
$sel_query5="Select * from popular where id = 4;";
$result5 = mysqli_query($con,$sel_query2);
$row5 = mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html>
<html>
<title>Food</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
a{text-decoration:none;}
</style>
<body class="w3-light-grey">
<div class="w3-content" style="max-width:1400px">
<div class="w3-row">
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
<?php echo "<img style=width:100% src = images/".$row['image'];?> </br>
    <div class="w3-container">
      <h3><b><?php echo $row["title"]; ?></b></h3>
      <h5> <span class="w3-opacity"> October 16, 2021</span></h5>
    </div>

    <div class="w3-container">
      <p><?php echo $row["description"]; ?></p>
      <div class="w3-row">
       
      </div>
    </div>
  </div>
  <hr>
</div>
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="images/fooo.jpg" style="width:100%">
    <div class="w3-container w3-white">
    
      <p>A food blog can be about recipes, the cuisine of different cultures, and reviews of restaurants. 
	  A food blog will almost always include pictures and photography of different foods and dishes that the author of the blog is writing about.
		If you want to make a food blog there are really no limits about what you can talk about, 
		you just need to talk about food!.</div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16"><a href="sports.php">
        <?php echo "<img class='w3-left w3-margin-right' style=width:100px src = images/".$row2['img'];?>
         <p class="w3-large"><span class="w3-large"><?php echo $row2["title"]; ?></span>
        <span><br/><?php echo $row2["author"]; ?></span></a>
      </li>
      <li class="w3-padding-16"><a href="technology.php">
        <?php echo "<img class='w3-left w3-margin-right' style=width:100px src = images/".$row3['img'];?>
         <p class="w3-large"><span class="w3-large"><?php echo $row3["title"]; ?></span>
        <span><br/><?php echo $row3["author"]; ?></span></a>
      </li>
	  <li class="w3-padding-16"><a href="marvel.php">
        <?php echo "<img class='w3-left w3-margin-right' style=width:100px src = images/".$row4['img'];?>
         <p class="w3-large"><span class="w3-medium"><?php echo $row4["title"]; ?></span>
        <span><br/><?php echo $row4["author"]; ?></span></a>
      </li>
	  <li class="w3-padding-16"><a href="travel.php">
        <?php echo "<img class='w3-left w3-margin-right' style=width:100px src = images/".$row5['img'];?>
         <p class="w3-large"><span class="w3-large"><?php echo $row5["title"]; ?></span>
        <span><br/><?php echo $row5["author"]; ?></span></a>
      </li>  
    </ul>
  </div>
  <hr> 
 
 
  <!--  tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Food</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Technology</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Marvel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Food</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Lifestyle</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Fitness</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Gaming</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>
</div>
</div><br>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <button class="w3-button w3-black  w3-padding-large w3-margin-bottom"><a href="index.php">Home</a></button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom"><a href="sports.php">Next »</a></button>
   
  <p>Reach us @: bloggersdomian.gmail.com</p>
  <p>Copyright:NS web-devlopers</p>
</footer>

</body>
</html>

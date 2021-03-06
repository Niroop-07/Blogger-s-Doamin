<?php
session_start();
$con = mysqli_connect("localhost","root","","projectdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sel_query="Select count('1') from blog;";
$result = mysqli_query($con,$sel_query);
$row=mysqli_fetch_array($result);
$sel_query2="Select count('1') from contact;";
$result2 = mysqli_query($con,$sel_query2);
$row2=mysqli_fetch_array($result2);
?>
<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:100px; 
   opacity:0.9;
}
a{text-decoration:none;}
</style>
<body class="w3-light-grey">	

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Blogger's Domain</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/ad.jpg" class="w3-circle w3-margin-right" style="width:90px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
      
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
	   <a href="layout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cloud fa-fw"></i>  Blogs</a>
    <a href="popular.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-snowflake-o fa-fw"></i>  Popular Posts</a>
    <a href="usermessage.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comments fa-fw"></i>User Messages</a>
	 <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i>Logout</a>

  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-cloud w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo"$row[0]";?></h3>
        </div><a href=layout.php>
        <div class="w3-clear"></div>
        <h4>Blogs</h4>
      </div></a>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-snowflake-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>4</h3>
        </div><a href=popular.php>
        <div class="w3-clear"></div>
        <h4>Popular Posts</h4>
      </div></a>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-tags w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>8</h3>
        </div><a href=categories.php>
        <div class="w3-clear"></div>
        <h4>Categories</h4>
      </div></a>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo"$row2[0]";?></h3>
        </div><a href=usermessage.php>
        <div class="w3-clear"></div>
        <h4>Users Messages</h4>
      </div></a>
    </div>
	
    </div>
  </div>


  <!-- Footer -->
  </br></br></br></br></br></br></br></br></br></br></br></br>
  <footer class="w3-center w3-black w3-padding-16">
  <p>Reach us @: bloggersdomian.gmail.com</p>
  <p>Copyright:NS web-devlopers</p>
</footer>

  <!-- End page content -->
</div>


</body>
</html>

<!DOCTYPE html>
<html>
<title>Blogger's Domain</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;
</style>
<!-- Navbar (sit on top) -->
<div class="w3-top">

  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
  <h1 style="color:black;font-family: Georgia;">Blogger's Domain</h1>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Categories</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
	  <a href="admin.html" class="w3-bar-item w3-button">Admin</a>
	
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">

  
   <img class="mySlides" src="images/banner1.jpg" alt="Architecture" width="1500" height="500">
    <img class="mySlides" src="images/banner2.jpg" alt="Architecture" width="1500" height="500">
	 <img class="mySlides" src="images/banner3.jpg" alt="Architecture" width="1500" height="500">
	  <img class="mySlides" src="images/banner5.jpg" alt="Architecture" width="1500" height="500">
	   <img class="mySlides" src="images/m1.jpg" alt="Architecture" width="1500" height="500">
  <div class="w3-display-middle w3-margin-top w3-center">
    </div>
  
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Categories</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">LifeStyle</div>
		<a href="lifestyle.php">
        <img src="images/lifestyle.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Technology</div>
		<a href="technology.php">
        <img src="images/technology.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Gaming</div>
		<a href="game.php">
        <img src="images/gaming.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Marvel</div>
		<a href="marvel.php">
        <img src="images/marvel.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Travel</div>
			<a href="travel.php">
        <img src="images/travel.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
	  
        <div class="w3-display-topleft w3-black w3-padding">Sports</div>
		<a href="sports.php">
        <img src="images/sports.png" alt="House" style="width:99%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Fitness</div>
		<a href="fitness.php">
        <img src="images/fitness.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Food</div>
		<a href="food.php">
        <img src="images/food.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Blogger's Domain is a one stop site where you can find your type of blogs among the various categories of blogs published frequently.
	You can also post your blogs if you have a good knak of writing informative and attractive blogs about your prefrences and sending it to our mail,this 
	may be your fisrt step of your blogging career.   
	A blog is a discussion or informational website published on the World Wide Web consisting of discrete,
	often informal diary-style text entries. Posts are typically displayed in reverse chronological order, 
	so that the most recent post appears first, at the top of the web page.
    </p>
  </div>

  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your blog.</p>
    <form method="POST">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Name" id="name" required name="name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" id="email" required name="email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" id="subject" required name="subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" id="comments" required name="comments">
      <button class="w3-button w3-black w3-section" type="submit" name="insert">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- Image of location/map -->
<div class="w3-container">
   <iframe height="400px" width="1300px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.0860190888875!2d77.51858201430106!3d12.902190167094684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3fa7243af9c3%3A0x9bed6669a38d1c3!2sRNS%20INSTITUTE%20OF%20TECHNOLOGY!5e0!3m2!1sen!2sin!4v1625129305723!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Reach us @: bloggersdomian.gmail.com</p>
  <p>Copyright:NS web-devlopers</p>
</footer>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"projectdb");
if(isset($_POST['insert']))
{
$insert= mysqli_query($con,"insert into contact(name,email,subject,comments) values ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[comments]')");
 
if($insert) {
echo "<script>alert('MESSAGE Sent')
            window.location.href='index.php';
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

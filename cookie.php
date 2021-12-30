<?php
session_start();
if(isset($_SESSION['count']))
{
echo "<br><br><br><br><br><br><br><br><center><h1>view= ".$_SESSION['count']."<br />";
$_SESSION['count']++;
}

?>

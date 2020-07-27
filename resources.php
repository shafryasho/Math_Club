<?php
session_start();
if (isset($_SESSION['logged_in']))
{
    include_once("headerLogin.php");  
}else{
  include_once("header.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<h1 style="text-align:center; font-size:220%; color:white;"> Welcome to Math Club </h1>
    <img width= 100% src="Images/Math_Logo.png" alt="Logo">

  <div class="jumbotron text-dark text-center bg-light" style="margin-bottom: 0">
    <h2 class="footer_head">Stay connected</h2>
    <a href="https://www.facebook.com"><img  class="footer_img" src="Images/facebook_logo.png" alt="fblogo"/></a>
    <a href="https://www.youtube.com/"><img  class="footer_img" src="Images/YouTube_logo.png" alt="youtubelogo"/></a>
    <a href="https://twitter.com/"><img  class="footer_img" src="Images/Twitter_logo.png" alt="twitterlogo"/></a>
  </div>
</body>
</html>
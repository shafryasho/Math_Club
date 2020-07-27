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
    <!-- <img width= 500px src="Images/Math_Logo.png" alt="Logo"> -->
    <h1 class="about_head"> Welcome to Math Club </h1>
    <img class="about_img" src="Images/home.jpg" alt="photo">
    
    
    <h4 class = "about_content"> About Us:</h4> 
    <p class ="about_content">
    The MATHCLUB is a non-profit organization that reaches students in grades 6-8 in all US states and territories with 3 
    extracurricular math programs. We encourage students participate in our programs or use our resources each year.
    There are many paths to success in math. We help all students discover theirs.
    Our approach is simple: we make learning math fun. We believe middle school is a critical juncture when a love of math must be encouraged, 
    and a fear of math must be overcome. Our programs build problem solving skills and positive attitudes about math, 
    so students embrace challenges and expand their academic and career opportunities in the future.</p>

  <div class="jumbotron text-dark text-center bg-light" style="margin-bottom: 0">
    <h2 class="footer_head">Stay connected</h2>
    <a href="https://www.facebook.com"><img  class="footer_img" src="Images/facebook_logo.png" alt="fblogo"/></a>
    <a href="https://www.youtube.com/"><img  class="footer_img" src="Images/YouTube_logo.png" alt="youtubelogo"/></a>
    <a href="https://twitter.com/"><img  class="footer_img" src="Images/Twitter_logo.png" alt="twitterlogo"/></a>
  </div>
</body>
</html>
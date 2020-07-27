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
    <h1 class= "about_head"> Welcome to Math Club </h1>
    <div class="program">
            <div class="row text-white">
              <div class="col-sm-4">
                <h3>MATHCLUB Competition</h3>
                <img width=80% src="Images/program1.png" alt="Logo">
                <p>We cultivate talent in the nation's brightest young minds through the MATHCLUB Competition Series. 
                  We bring together students from all 50 states in a series of in-person contests—the only competition program 
                  of its kind.</p>  
                </div>
              <div class="col-sm-4">
                <h3>The National Math Club</h3>
                <img width=80% src="Images/program2.png" alt="Logo">
                <p>We inspire curiosity and build confidence in students of all levels through the National Math Club. 
                  We help create a space where learning math is fun, social and supportive, 
                  so that every student becomes a lifelong math learner.</p>
                </div>
              <div class="col-sm-4">
                <h3>Math Video Challenge</h3>
                <img width=80% src="Images/program3.png" alt="Logo">        
                <p>We inspire creativity in students through project-based learning with the Math Video Challenge. 
                  We enable students to connect and apply math to their own lives by producing their own math videos, 
                  and teach others in the process.</p>
              </div>
            </div>
        </div>
    

  <div class="jumbotron text-dark text-center bg-light" style="margin-bottom: 0">
    <h2 class="footer_head">Stay connected</h2>
    <a href="https://www.facebook.com"><img  class="footer_img" src="Images/facebook_logo.png" alt="fblogo"/></a>
    <a href="https://www.youtube.com/"><img  class="footer_img" src="Images/YouTube_logo.png" alt="youtubelogo"/></a>
    <a href="https://twitter.com/"><img  class="footer_img" src="Images/Twitter_logo.png" alt="twitterlogo"/></a>
  </div>
</body>
</html>

<?php
session_start();
if (isset($_SESSION['logged_in']))
// if ($_SESSION['logged_in'] = 1)
{
  include_once("headerLogin.php");
}else{
include_once("header.php");
}

?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
  <div class="container" style="margin-top:30px">
    <div class="row text-light" >
      <div class="col-sm-6">
        
        <iframe class = "home_vd" width="560" height="315" src="https://www.youtube.com/embed/OmJ-4B-mS-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <img src="Images/home.jpg" alt='img' width=600px> -->
            
        </div>
        <!-- <hr class="d-lg-none"> -->
      <div class="col-sm-6">
        <h3 style="width:100%;"> Here is some history about mathamatics:</h3>
        <p style="width:100%;">
        The history of mathematics can be seen as an ever-increasing series of abstractions. The first abstraction, which is shared by many animals,
         was probably that of numbers: the realization
        that a collection of two apples and a collection of two oranges (for example) have something in common, namely quantity of their members.
        As evidenced by tallies found on bone, in addition to recognizing how to count physical objects, prehistoric peoples may have also recognized
        how to count abstract quantities, like time – days, seasons, years.
        Evidence for more complex mathematics does not appear until around 3000 BC, when the Babylonians and Egyptians began using arithmetic, 
        algebra and geometry for taxation and other financial calculations, for building and construction, and for astronomy. 
        The most ancient mathematical texts from Mesopotamia and Egypt are from 2000–1800 BC. Many early texts mention Pythagorean triples and so,
         by inference, the Pythagorean theorem seems to be the most ancient and widespread mathematical development after basic arithmetic and geometry.
          It is in Babylonian mathematics that elementary arithmetic (addition, subtraction, multiplication and division)
           first appear in the archaeological record. The Babylonians also possessed a place-value system, and used a sexagesimal numeral system,
            still in use today for measuring angles and time.
       </p>
      </div>
    </div>
  </div>
  <div class = "problem rounded-lg">
    <h3 class= 'problem_head'>Problem of the week</h3>
    <p class ='problem_content'>October 23, 2019<br>
Topics/Content Areas: 
Percents & Fractions, Plane Geometry, Proportional Reasoning<br><br>
As the weather is turning cooler and daylight is arriving later in the morning and trees are starting to lose their leaves,
many of us are noticing that summer is over and we’re well into fall. 
Or is it autumn?  Mr. Kravis surveyed his class, and out of 28 students 
(with every student picking exactly one of the two options), 
the ratio of the number of students who called the season 
“fall” to the number of students who called the season “autumn” was 3:1.  
How many students called the season “fall?”</p>
  </div>

  <div class="jumbotron text-dark text-center bg-light" style="margin-bottom: 0">
    <h2 class="footer_head">Stay connected</h2>
    <a href="https://www.facebook.com"><img  class="footer_img" src="Images/facebook_logo.png" alt="fblogo"/></a>
    <a href="https://www.youtube.com/"><img  class="footer_img" src="Images/YouTube_logo.png" alt="youtubelogo"/></a>
    <a href="https://twitter.com/"><img  class="footer_img" src="Images/Twitter_logo.png" alt="twitterlogo"/></a>
  </div>

</body>
</html>

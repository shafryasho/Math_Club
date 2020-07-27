<?php
session_start();
require 'connectdb.php';
include_once 'headerLogin.php';
if($_SESSION['logged_in']=1)
 {
     $user = $_SESSION['email'];
 }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Profile</title>
</head>
<body>
<div class="profile_view">
    <form action='profile.php' method='POST' enctype='multipart/form-data'>
            Click the button view profiles of all registered user<br><br>
          <button name="view_btn" type="submit" class="btn btn-primary">VIEW PROFILES</button>
    </form>
</div>

<?php
    if (isset($_POST['view_btn'])){

        
        $sql = "SELECT * from users";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['logged_in'] = true;
                $sqlImg = "SELECT * from img where userid='$id'";
                $resultImg = mysqli_query($conn, $sqlImg);
                while($rowImg = mysqli_fetch_assoc($resultImg)){
                    
                    echo "<div class='col-md-4'>";
                    echo "<div class='profile rounded-lg'>";
                    
                        if ($rowImg['status'] == 0){
                            echo "<img class='profile_img' src='Images/profile".$id.".jpg?'".mt_rand().">";
                        } else {
                            echo "<img class='profile_img' src='Images/profiledefault.png'>";
                        }
                        //echo "</div>";
                    //     echo "    <form class='profile_form' action='upload.php' method='POST' enctype='multipart/form-data'>
                    //     <input class='file' type='file' name='file'>
                    //     <button class='upload_btn' type= 'submit' name='upload'>UPLOAD</button>
                    //   </form>";
                        //echo "<div class='col-md-6'>";
                        echo "<p>"."<b>".'First name:     '."</b>".$row['firstname']."</p>";
                        echo "<p>"."<b>".'Last name:      '."</b>".$row['lastname']."</p>";  
                        echo "<p>"."<b>".'Email:          '."</b>".$row['email']."</p>"; 
                        echo "<p>"."<b>".'Phone:          '."</b>".$row['phone']."</p>";
                        echo "<p>"."<b>".'Favorite color: '."</b>".$row['color']."</p>";
                    echo "</div>";
                    echo "</div>";
                    }
                }
            }
        }
    


    else {
        $sql = "SELECT * from users where email ='$user'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['logged_in'] = true;
                $sqlImg = "SELECT * from img where userid='$id'";
                $resultImg = mysqli_query($conn, $sqlImg);
                while($rowImg = mysqli_fetch_assoc($resultImg)){
                    echo "<div class='profile rounded-lg'>";
                        if ($rowImg['status'] == 0){
                            echo "<img class='profile_img' src='Images/profile".$id.".jpg?'".mt_rand().">";
                        } else {
                            echo "<img class='profile_img' src='Images/profiledefault.png'>";
                        }
                        //echo "</div>";
                        echo "    <form class='profile_form' action='upload.php' method='POST' enctype='multipart/form-data'>
                        <input class='file' type='file' name='file'>
                        <button class='upload_btn' type= 'submit' name='upload'>UPLOAD</button>
                      </form>";
                      
                      







                        //echo "<div class='col-md-6'>";
                        echo "<p>"."<b>".'First name:     '."</b>".$row['firstname']."</p>";
                        echo "<p>"."<b>".'Last name:      '."</b>".$row['lastname']."</p>";  
                        echo "<p>"."<b>".'Email:          '."</b>".$row['email']."</p>"; 
                        echo "<p>"."<b>".'Phone:          '."</b>".$row['phone']."</p>";
                        echo "<p>"."<b>".'Favorite color: '."</b>".$row['color']."</p>";
                    echo "</div>";
                    //echo "</div>";

                }
            }
        }
    }
    ?>

<div class="jumbotron text-dark text-center bg-light" style="margin-bottom: 0">
    <h2 class="footer_head">Stay connected</h2>
    <a href="https://www.facebook.com"><img  class="footer_img" src="Images/facebook_logo.png" alt="fblogo"/></a>
    <a href="https://www.youtube.com/"><img  class="footer_img" src="Images/YouTube_logo.png" alt="youtubelogo"/></a>
    <a href="https://twitter.com/"><img  class="footer_img" src="Images/Twitter_logo.png" alt="twitterlogo"/></a>
  </div>
    

</body>
</html>










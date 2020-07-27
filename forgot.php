<?php 
// if (isset($_SESSION['logged_in'])){
//   include_once("headerLogin.php");
//   include "logout.php";  
// }else{
//include("header.php");
//}
include_once 'connectdb.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
  
  if(isset($_POST['reset'])){
    $email = $conn->escape_string($_POST['email']);
    $firstname = $conn->escape_string($_POST['firstname']);
    $lastname = $conn->escape_string($_POST['lastname']);
    $color = $conn->escape_string($_POST['color']);
    require_once ('formvalidation.php');
    $result = $conn->query("SELECT * FROM users WHERE email='$email' AND firstname='$firstname' AND lastname='$lastname' AND color='$color'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with these details doesn't exist!";
        header("location: forgot.php?reset=nouser");
    }
    else { // User exists (num_rows != 0)
        if ( $_POST['newpassword'] == $_POST['confirmpassword'] ) { 

            $new_password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);
            
            // We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
            $email = $conn->escape_string($_POST['email']);
            $hash = $conn->escape_string( md5( rand(0,1000) ) );
            
            $sql = "UPDATE users SET password='$new_password', hash='$hash' WHERE email='$email'";
    
            if ( $conn->query($sql) ) {
    
            $_SESSION['message'] = "Your password has been reset successfully!";
            header("location: success.php");    
    
            }
    
        }
        else {
            $_SESSION['message'] = "Two passwords you entered don't match, try again!";
            header("location: forgot.php?reset=pwd&firstname=$firstname&lastname=$lastname&email=$email&color=$color");    
        }   
      }  
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>

<body>
    
  <div class="forgot rounded-lg"> 

    <form action="forgot.php" method="post">
    <h3 class="forgot-head">Reset Your Password</h3>
     <div class="forgot-content">
     <?php
          if(isset($_GET['email'])){
            $email = $_GET['email'];
            echo '<input type="email" required autocomplete="off" class="form-control" placeholder="name@example.com" name="email" value="'.$email.'">';
          }
            else{
              echo '<input type="email" required autocomplete="off" class="form-control" placeholder="name@example.com" name="email">';
          }
          ?>
      <!-- <input class="form-control" type="email" required autocomplete="off" placeholder="Email" name="email"/> -->
    </div>
    <div class="forgot-content">
    <?php
          if(isset($_GET['firstname'])){
            $firstname = $_GET['firstname'];
            echo '<input type="text" required autocomplete="off" class="form-control" placeholder="First name" name="firstname" value="'.$firstname.'">';
          }
            else{
              echo '<input type="text" required autocomplete="off" class="form-control" placeholder="First name" name="firstname">';
          }
          ?>
      <!-- <input class="form-control"type="text" required autocomplete="off" placeholder="First name" name="first_name"/> -->
    </div>
    <div class="forgot-content">
    <?php
          if(isset($_GET['lastname'])){
            $lastname = $_GET['lastname'];
            echo '<input type="text" required autocomplete="off" class="form-control" placeholder="Last name" name="lastname" value="'.$lastname.'">';
          }
            else{
              echo '<input type="text" required autocomplete="off" class="form-control" placeholder="Last name" name="lastname">';
          }
          ?>
      <!-- <input class="form-control" type="text" required autocomplete="off" placeholder="Last name" name="last_name"/> -->
    </div>
    <div class="forgot-content">
    <?php
          if(isset($_GET['color'])){
            $color = $_GET['color'];
            echo '<input type="text" required autocomplete="off" class="form-control" placeholder="What is your favorite color?" name="color" value="'.$color.'">';
          }
            else{
              echo '<input type="text" required autocomplete="off" class="form-control" placeholder="What is your favorite color?" name="color">';
          }
          ?>
      <!-- <input class="form-control" type="text" required autocomplete="off" placeholder="What is your favorite color?" name="color"/> -->
    </div>
    <div class="forgot-content">
        <input class="form-control" type="password"required name="newpassword" placeholder="new password" autocomplete="off"/>
    </div>
              
    <div class="forgot-content">
        <input class="form-control" type="password"required name="confirmpassword" placeholder="confirm password" autocomplete="off"/>
    </div>
    <div class="forgot-content">                     
    <button name='reset' class="btn btn-block btn-primary" type="submit"/>Reset</button>                     
    </div>
    </form>
    <div class="login-form">
        Don't have an account?<a class="login-form-a" href="signup.php">Sign Up</a>
    </div>
  </div>
          
</body>
</html>

<?php
if(!isset($_GET['reset'])){
  exit();
}
else{
  $login_check = $_GET['reset'];

  if($login_check == 'nouser'){
    echo "<p class='alert'>User with these details doesn't exist!</p>";
    exit();
  }
  if($login_check == 'pwd'){
    echo "<p class='alert'>Two passwords you entered don't match, try again!</p>";
    exit();
  }
}
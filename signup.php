<?php
// if (isset($_SESSION['logged_in'])){
//   include_once("headerLogin.php");
//   // include "logout.php";  
// }else{
include("header.php");
//}
include_once 'connectdb.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>


<body><br>
  <div class="signup rounded-lg">   
          
      <form action ="register.php" method="post">
          
          <div class="signup-form-logo">
            <img class="login-logo" width="450px" src="Images/Math_Logo.png" alt="Logo">
          </div>

          <div class="signup-content">
            <div class="signup-form-header">Sign up for FREE</div>
          </div>

            <div class="signup-content">
            <?php
          if(isset($_GET['firstname'])){
            $firstname = $_GET['firstname'];
            echo '<input type="text" required autocomplete="off" class="form-control" placeholder="First name" name="firstname" value="'.$firstname.'">';
          }
            else{
              echo '<input type="text" required autocomplete="off" class="form-control" placeholder="First name" name="firstname">';
          }
          ?>
              <!-- <input type="text" required autocomplete="off" class="form-control" name='firstname' placeholder="First name" /> -->
            </div>
        
            <div class="signup-content">
            <?php
          if(isset($_GET['lastname'])){
            $lastname = $_GET['lastname'];
            echo '<input type="text" required autocomplete="off" class="form-control" placeholder="Last name" name="lastname" value="'.$lastname.'">';
          }
            else{
              echo '<input type="text" required autocomplete="off" class="form-control" placeholder="Last name" name="lastname">';
          }
          ?>
              <!-- <input type="text"required autocomplete="off" class="form-control" name='lastname' placeholder="Last name" /> -->
            </div>

          <div class="signup-content">
          <?php
          if(isset($_GET['email'])){
            $email = $_GET['email'];
            echo '<input type="email" required autocomplete="off" class="form-control" placeholder="name@example.com" name="email" value="'.$email.'">';
          }
            else{
              echo '<input type="email" required autocomplete="off" class="form-control" placeholder="name@example.com" name="email">';
          }
          ?>
            <!-- <input type="email"required autocomplete="off" class="form-control" name='email' placeholder="name@example.com" /> -->
            <small>This will be your new Login ID.</small>
          </div>
          
          <div class="signup-content">
            <input type="password"required autocomplete="off" class="form-control" name='password' placeholder="Password"/>
          </div>
          
          <div class="signup-content">
            <input type="password"required autocomplete="off" class="form-control" name='password1' placeholder="Confirm password"/>
          </div>

          <div class="signup-content">
            <input type="tel" name="phone" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"required placeholder="Ph. no: 123-456-7890"/>
          </div>

          <div class="signup-content">
          <?php
          if(isset($_GET['color'])){
            $color = $_GET['color'];
            echo '<input type="text" required autocomplete="off" class="form-control" placeholder="What is your favorite color?" name="color" value="'.$color.'">';
          }
            else{
              echo '<input type="text" required autocomplete="off" class="form-control" placeholder="What is your favorite color?" name="color">';
          }
          ?>
            <!-- <input type="text" required autocomplete="off" class="form-control" name='color' placeholder="What is your favorite color?" /> -->
            <small>This is a security question.</small>
          </div>

          <div class="signup-content">
          <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
          </div>

          <div class="signup-content">
            Already have an account?<a class="signup-form-a" href="index.php">Login</a>
          </div>          
      </form>
  </div>  
</body>
</html>

<?php
if(!isset($_GET['signup'])){
  exit();
}
else{
  $login_check = $_GET['signup'];

  if($login_check == 'email'){
    echo "<p class='alert'>Invalid email address</p>";
    exit();
  }
  if($login_check == 'firstname'){
    echo "<p class='alert'>Only letters are allowed in First name";
    exit();
  }
  if($login_check == 'lastname'){
    echo "<p class='alert'>Only letters allowed in Last name";
    exit();
  }
  if($login_check == 'color'){
    echo "<p class='alert'>Only letters are allowed in color";
    exit();
  }
  if($login_check == 'pwd'){
    echo "<p class='alert'>Passwords do not match";
    exit();
  }
  if($login_check == 'duplicate'){
    echo "<p class='alert'>User with that email already exist!";
    exit();
  }
  if($login_check == 'failed'){
    echo "<p class='alert'>Registration failed";
    exit();
  }
}
?>
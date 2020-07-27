<?php
require 'connectdb.php';
include_once ("header.php");
session_start();
// include_once ('login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/style.css"/>
</head>

<body>
  <div class="container"><br>
      <h1>Some students love math<br>
          Other students fear math<br>
          MATHCLUB is the place for both<br>
      </h1><br>
      <!-- <div class="alert alert-error"><?= $_SESSION['message']?></div> -->
      <div class="login rounded-lg">
      <!-- <h2 style="text-align:center">Login</h2> -->
      <!-- <img class="login-logo" width="450px" src="Images/Math_Logo.png" alt="Logo"> -->
      
        <form action="login.php" method="post">
        
          <div class="login-form-logo">
            <img class="login-logo" width=450px src="Images/Math_Logo.png" alt="Logo">
          </div>
          <div class="login-form">
            <div class="login-form-header">Login to your account</div>
          </div>
          <div class ="login-form">
          <?php
          if(isset($_GET['email'])){
            $email = $_GET['email'];
            echo '<input type="email" required autocomplete="off" class="form-control" placeholder="Enter email" name="email" value="'.$email.'">';
          }
            else{
              echo '<input type="email" required autocomplete="off" class="form-control" placeholder="Enter email" name="email">';
          }
          ?>
          </div>
          <!-- <div class="login-form">
            <input type="email" required autocomplete="off" class="form-control" placeholder="Enter email" name="email">
          </div> -->
          <div class="login-form">
            <input type="password" required autocomplete="off" class="form-control" placeholder="Enter password" name="password">
          </div>
          <div class="login-form">
          <button name="login_btn" type="submit" class="btn btn-primary btn-block">LOGIN</button>
          </div>
          <div class="login-form">
            <a class="login-form-a" href="forgot.php">Forgot Password?</a>
          </div>   
          <div class="login-form">
            Don't have an account?<a class="login-form-a" href="signup.php">Sign Up</a>
          </div>
        
        </form>
  </div>
  </div>
  

</body>
</html>
<?php
if(!isset($_GET['login'])){
  exit();
}
else{
  $login_check = $_GET['login'];

  if($login_check == 'email'){
    echo "<p class='alert'>Invalid email address</p>";
    exit();
  }
  if($login_check == 'noemail'){
    echo "<p class='alert'>User with that email does not exist";
    exit();
  }
  if($login_check == 'pwd'){
    echo "<p class='alert'>You have entered wrong password, try again!";
    exit();
  }
}
?>
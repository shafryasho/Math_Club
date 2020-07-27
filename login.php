<?php
require ('connectdb.php');//includes the connectdb.php once for database connection.
session_start(); // Starting Session
//$error = ''; Variable To Store Error Message
if($_SERVER['REQUEST_METHOD']== 'POST'){
    require_once ('formvalidation.php');
    
if (isset($_POST['login_btn'])) {
    //$_SESSION['email'] = $_POST['email'];
$email = $conn->escape_string($_POST['email']);
$password = $_POST['password'];
$stmt = $conn->query("SELECT * FROM users WHERE email='$email'");
if ( $stmt->num_rows == 0 ){ // User doesn't exist
    //$_SESSION['message'] = "User with that email doesn't exist!";
    //header("location: error.php");
    //header("location: index.php");
    // $conn->close();
    header("location: index.php?login=noemail");
    exit();
    
}
else { // User exists
    $user = $stmt->fetch_assoc();

    if ( password_verify($password, $user['password']) )

{
//$_SESSION['user']= $user;
$user_email = $_SESSION['email'];

 // Initializing Session
$_SESSION['email'] = $user['email'];
$_SESSION['firstname'] = $user['firstname'];
$_SESSION['lastname'] = $user['lastname'];
$_SESSION['phone'] = $user['phone'];
$_SESSION['id'] = $user['id'];
$_SESSION['logged_in'] = true;


header("location: profile.php"); // Redirecting To Profile Page
}
else {  
    //$_SESSION['message'] = "You have entered wrong password, try again!";
    //header("location: error.php");
    header("location: index.php?login=pwd&email=$email");
    exit();
}}
}
}

?>
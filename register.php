<?php
if (isset($_SESSION['logged_in'])){
    include_once("headerLogin.php");
    // include "logout.php";  
}else{
  include("header.php");
}
require_once "connectdb.php";
session_start();
if($_SERVER['REQUEST_METHOD']== 'POST'){
    
    //$_SESSION['email'] = $_POST['email'];
    // $_SESSION['firstname'] = $_POST['firstname'];
    // $_SESSION['lastname'] = $_POST['lastname']; 

$firstname = $conn->escape_string($_POST['firstname']);
$lastname = $conn->escape_string($_POST['lastname']);
$email = $conn->escape_string($_POST['email']);
if($_POST['password'] == $_POST['password1']){
$password = $conn->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
}
else{
    //$_SESSION['message'] = "Passwords do not match";
    header("location: signup.php?signup=pwd&email=$email&firstname=$firstname&lastname=$lastname&color=$color");
    die($conn->error);
}
$hash = $conn->escape_string( md5( rand(0,1000) ) );
$phone = $conn->escape_string($_POST['phone']);
$color = $conn->escape_string($_POST['color']);
require_once('formvalidation.php');
// Check if user with that email already exists
$stmt = $conn->query("SELECT * FROM users WHERE email='$email'") or die($conn->error());

// We know user email exists if the rows returned are more than 0
if ( $stmt->num_rows > 0 )
{
    //$_SESSION['message'] = 'User with this email already exists!';
    header("location: signup.php?signup=duplicate"); 
    exit(); 
}
else { // Email doesn't already exist in a database, proceed...

        $sql = "INSERT INTO users (firstname, lastname, email, password, phone, hash, color)" 
            . "VALUES ('$firstname','$lastname','$email','$password', '$phone', '$hash', '$color')";

        // Add user to the database
        if ( $conn->query($sql)){
        $sql1 = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_assoc($result))
        {
            $userid = $row['id'];
            $_SESSION['email'] = $row['email'];
            $sqlImg = "INSERT INTO img (userid, status) VALUES ('$userid', 1)";
            mysqli_query($conn, $sqlImg);
            
        }


        $_SESSION['logged_in'] = true; // So we know the user has logged in
        // $_SESSION['user'] = $email;
        //$_SESSION['message'] = "Registration successful";
                

        header("location: profile.php"); 

        }
  
        else {
        //$_SESSION['message'] = 'Registration failed!';
        header("location: signup.php?signup=failed");
    }

}
}
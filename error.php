<?php
if (isset($_SESSION['logged_in'])){
    include_once("headerLogin.php");
    include "logout.php";  
}else{
  include("header.php");
}
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>
<br><br> <br>
<div class="error-form rounded-lg">
    
    <h1 style="padding:15px">Error</h1>
    <p style="margin-bottom: 35px">
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="btn btn-info btn-block"/>Home</button></a>
</div>
</body>
</html>

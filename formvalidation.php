<?php
require_once 'connectdb.php';

//$firstname = $lastname = $email =  "";

 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
          }
    if (isset($_POST['register'])){
    
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
 
        //$_SESSION['message']= "Only letters and white space allowed";
        header ("location: signup.php?signup=firstname&email=$email&lastname=$lastname&color=$color");
        // $conn->close();
        exit();
    }

        $lastname = test_input($_POST["lastname"]);

       if(!preg_match("/^[a-zA-Z]*$/",$lastname))
        {
            //$_SESSION['message']= "Only letters and white space allowed";
            header ("location: signup.php?signup=lastname&firstname=$firstname&email=$email&color=$color");
            //$conn->close();
            exit();
        }

        $color = test_input($_POST["color"]);

        if(!preg_match("/^[a-zA-Z]*$/",$color))
         {
             //$_SESSION['message']= "Only letters and white space allowed";
             header ("location: signup.php?signup=color&firstname=$firstname&lastname=$lastname&email=$email");
            //$conn->close();
            exit();
         }

            ($email = test_input($_POST["email"]));

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                //$_SESSION['message']= "Invalid email format";
                header ("location: signup.php?signup=email&firstname=$firstname&lastname=$lastname&color=$color");
                //$conn->close();
                exit();
            }
    }
    

    if(isset($_POST['login_btn']))
    {
        ($email = test_input($_POST["email"]));
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("location: index.php?login=email");
        //$_SESSION['message']="Invalid email format";
        //header ('location: index.php');
        // $conn->close();
        exit();
    }
}

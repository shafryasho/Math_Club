<?php
session_start();
if(isset($_POST['upload']))
{
include_once 'connectdb.php';
if($_SESSION['logged_in'] = 1)
{
    $id = $_SESSION['id'];
}

    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg');
    if(in_array($fileActualExt, $allowed)){
        if ($fileError === 0) {
            if($fileSize < 1000000){
                $fileNameNew = "profile".$id.".".$fileActualExt;
                echo $fileNameNew;
                $fileDestination = "Images/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE img SET status=0 WHERE userid='$id'";
                $result = mysqli_query($conn, $sql);
                header("location: profile.php");
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "Error uploading your file!";
        }
    } else {
        echo "upload only .jpg files";
    }

}


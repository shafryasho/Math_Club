<?php

//connection variables
$host = 'localhost';
$user = 'root';
$password = '';

//create mysql connection
$conn = new mysqli($host,$user,$password);
if ($conn->connect_errno) {
    printf("Connection failed: %s\n", $conn->connect_error);
    die();
}

//create the database
if ( !$conn->query('CREATE DATABASE accounts') ) {
    printf("Errormessage: %s\n", $conn->error);
}

//create users table with all the fields
$conn->query('
CREATE TABLE `accounts`.`users` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(36) NOT NULL,
    `lastname` VARCHAR(36) NOT NULL,
    `email` VARCHAR(36) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(12) NOT NULL,
    `hash` VARCHAR(255) NOT NULL,
    `color` VARCHAR(36) NOT NULL,
PRIMARY KEY (`id`) 
);') or die($conn->error);

$conn->query('
CREATE TABLE `accounts`.`img` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `userid` INT(11) NOT NULL,
    `status` INT(11) NOT NULL,
PRIMARY KEY (`id`) 
);') or die($conn->error);

?>
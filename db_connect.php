<?php


// variables needed to connect to database
$host = "localhost";
$username = "student";
$user_pass = "student";
$database_in_use="440";

// create database connection instance 
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
?>
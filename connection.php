<?php 
$host = "localhost";
$user = "root"; //username
$pass = ""; //password
$db = "thirdsem"; //database name to be connected
//connects the php to the database third sem 
$con = mysqli_connect($host, $user, $pass, $db)or die("something wrong while connecting to database");
 ?>
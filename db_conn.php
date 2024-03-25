<?php
$severname = "localhost";     
$username = "root";
$password = "";
$dbname = "jovelyn";

//create connection
$conn = mysqli_connect($severname, $username, $password,$dbname);   

//check connection
if (!$conn){
    die("connection failed: " . mysql_connection_error());
}
  //echo "Connected Succesfully";
  
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername="localhost";
$username="root";
$password="";
$database="demoo";
$link = mysqli_connect($servername, $username, $password ,$database);
 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<?php
$severname = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "mydb" ;

$conn = new mysqli($severname, $username, $password, $dbname) ;

if ($conn->connect_error){
    die("Connection error: " .$conn->connect_error) ;
}
?>
<?php
$severname = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "mydb" ;

$conn = new mysqli($severname, $username, $password, $dbname) ;

if ($conn->connect_error){
    die("Connection error: " .$conn->connect_error) ;
}
if (isset($_POST["sub"])){
$email = $_POST['email'] ;
$nameAccount = $_POST['name'] ;
$username = $_POST['username'] ;
$password = $_POST['pass'] ;

$sql = "INSERT INTO customer(Email, NameAccount,Name ,Password) VALUES ('$email','$nameAccount','$username','$password')" ;

mysqli_query($conn,$sql) ;
}

mysqli_close($conn) ;
?>
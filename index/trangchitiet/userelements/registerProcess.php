<?php
include "../connection.php" ;
if (isset($_POST["sub"])){
$email = $_POST['email'] ;
$nameAccount = $_POST['name'] ;
$username = $_POST['username'] ;
$password = $_POST['pass'] ;
$address = $_POST['addresss'] ;

$sql = "INSERT INTO customer VALUES ('$email','$nameAccount','$username','$password','null',1,'$address')" ;

mysqli_query($conn,$sql) ;
}

mysqli_close($conn) ;
?>
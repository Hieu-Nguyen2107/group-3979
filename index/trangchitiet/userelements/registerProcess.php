<?php
include "../connection.php" ;
if (isset($_POST["sub"])){
$email = $_POST['email'] ;
$name = $_POST['name'] ;
$acc = $_POST['username'] ;
$password = $_POST['pass'] ;
$address = $_POST['address'] ;

$sql = "INSERT INTO customer VALUES ('$email','$acc','$name','$password','null',1,'$address')" ;

if (mysqli_query($conn,$sql))
{
    header ("Location: ../../index.php") ;
    exit ;
}else{
    header ("Location: register.php") ;
    exit ;
}
}

mysqli_close($conn) ;
?>
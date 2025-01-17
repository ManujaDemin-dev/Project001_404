<?php

include("server.php");

$name = $_POST['username']; 
$email = $_POST['email']; 
$pass = $_POST['pwd']; 

$sql = "INSERT INTO projectdb (Name,Email,PWD) VALUES('$name','$email','$pass')";
if($conn->query($sql) === TRUE){
    header("Location: login.html");

}else{
    echo "Sorry something went wrong :(";
}


?>



<?php
include("server.php");
session_start();

$e = $_POST['email'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM projectdb WHERE Email = '$e' AND PWD = '$pw' ";

$rn = mysqli_query($conn , $sql);

if(mysqli_num_rows($rn)> 0){
    $_SESSION['user'] = "user";
    header("Location: welcome.php");

}else{
    header("Location: login.html");

}


?>
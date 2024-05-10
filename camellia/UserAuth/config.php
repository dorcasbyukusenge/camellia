<?php 
session_start();
$conn = mysqli_connect("localhost","root","","camellia");
if(!$conn){
    echo "Not connected!";
}
if(!$_SESSION['username']){
    header("Location: ./login.php");
}


?>
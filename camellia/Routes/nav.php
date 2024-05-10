<?php 
session_start();
$conn = mysqli_connect("localhost","root","","camellia");
if(!$conn){
    echo "Not connected!";
}
if(!$_SESSION['username']){
    header("Location: ../UserAuth/login.php");
}
// else{
//     echo $_SESSION['adminname'];
//     echo "is set";
// }


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camellia</title>
    <link rel="stylesheet" href="./nav.css">

</head>

<body>
 <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="./index.php" class="logo">Cafe Camellia</i></a>
        <nav class="navbar">
            <a href="./index.php">home</a>
            <a href="./post.php">posts</a>
            <a href="./candidate.php">candidates</a>
            <a href="report.php">report</a>
        </nav>
  <p><?php echo $_SESSION['username'] ?></p>
  <button><a href="../UserAuth/logout.php" class="logout"> Logout </a></button>
    </header>
</body>
</html>
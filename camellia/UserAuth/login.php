<?php  
session_start();
$conn = mysqli_connect("localhost","root","","camellia");

if(isset($_SESSION['username'])){
    header("Location: ../Routes/index.php");
}
// echo mysqli_num_rows();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($conn,"SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
    if(mysqli_num_rows($login) == 1){
        $fetch = mysqli_fetch_assoc($login)['username'];
        $_SESSION['username'] = $fetch;
        header("Location: ../Routes/index.php");
    }
    else{
        echo "username or password incorrect";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
        body{
            background: url(../images/home-bg.jpg);
            color:white;
            font-family: 'Roboto', sans-serif;
            background-size: cover;
        }
    form{
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: fit-content;
        border: 1px solid #fff;
        font-size: larger;
        padding: 40px;
        margin-left: 40%;
        margin-top: 10%;
        color: aliceblue;
        border-radius: 20px;
        font-weight: bolder;
        background: lightblue;
    }
    input{
        outline: none;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        border-bottom: 2px solid wheat;
        background-color: transparent;
        font-size: large;
        color: #fff;
    }
    button{
        padding: 5px;
        margin-top: 10px;
        background-color: blue;
        color: white;
        font-size: 20px;
        border-radius: 3px;
        border-color: transparent;
    }

    .name{
        display: flex;
        flex-direction: column;
    }
    a{
        text-decoration: none;
        color: dodgerblue;
    }
    @media(orientation:portrait){
        form{
            margin-left: 50px;
        } 
    }
</style>
<body>

        <form action="" method="POST">
                <h1>Login as User</h1>
                <label for="username">User name</label>
                <input type="text" name="username">
                <label for="password">Password</label>
                <input type="password" name="password">
                <div>
    </div>
            <button type="submit" name="login">Login</button>
            <div>
        <span>Don't have an account</span>&nbsp;
                <a href="./signup.php">Signup</a>
            </div> 
        </form>

</body>
</html>
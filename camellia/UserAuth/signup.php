<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<style>
             body{
            background: url(../images/about-img.png);
            color:white
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
        background:lightblue;
        font-family: 'Roboto', sans-serif;
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
            <h1>Signup as User</h1>
            <label for="username">User name</label>
            <input type="text" name="username">
            <label for="password">Password</label>
            <input type="password" name="password">
            <div>
</div>
        <button  type="submit" name="signup">Signup</button>
        <div>
     <span>already have an account</span>&nbsp;
            <a href="./login.php">Login</a>
        </div> 
         
    </form>

        <?php
session_start();
$conn = mysqli_connect("localhost","root","","camellia");
if(!$conn){
    echo "Not connected! to database rdl";
}
if (isset($_SESSION['username'])) {
    # code...
    header('location:../Routes/home.php');
}

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqlcheck = "SELECT * FROM users WHERE username='{$username}'";
    $check = mysqli_query($conn,$sqlcheck);
    if (mysqli_num_rows($check) > 0) {
        # code...
        echo "that username already exists in that username";
    }
    else{
        $add =  mysqli_query($conn,"INSERT INTO users (username,password) VALUES('{$username}','{$password}')"); 
        if ($add) {
            $select = mysqli_query($conn,"SELECT * FROM users WHERE username='{$username}' AND password='{$password}'");
            $fetch = mysqli_fetch_assoc($select)['username'];
            $_SESSION['username'] = $fetch;
            header("location: ../Routes/index.php");
        }
        
    }

}
?>
    </form>

</body>
</html>
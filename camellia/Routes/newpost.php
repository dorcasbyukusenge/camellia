<?php
  include "./nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/add_candidate.css?b=1.3">
	<title>Add post</title>
</head>
<style>
    form{
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: fit-content;
        border: 1px solid #fff;
        font-size: larger;
        background: rgb(104, 208, 208);
        padding: 40px;
        margin-left: 40%;
        margin-top: 10%;
        color: aliceblue;
        border-radius: 20px;
    }
    input{
        outline: none;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        border-bottom: 2px solid wheat;
        background-color: transparent;
        font-size: large;
    }
    button{
        padding: 5px;
        margin-top: 10px;
    }

    .name{
        display: flex;
        flex-direction: column;
    }
    a{
        text-decoration: none;
        color: black;
    }
    @media(orientation:portrait){
        form{
            margin-left: 50px;
        } 
    }
</style>
<body>
	<div class="candidate">
		<form action="" method="post">
            <h1>Add New post</h1>
			<label for="newpost">New post :</label><br>
			<input type="text" name="post" required><br>
			<button type="submit" name="submit">Add Post</button>
		</form>
	</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$post=$_POST['post'];
	$insert= "INSERT INTO post(postname)
	 VALUES('$post')";
	 if($conn->query($insert)){
		header("location:./post.php");
	 }else{
		echo "error".$insert."<br>".$conn->error;
	 }
}

?>
<?php
include "./nav.php";
$conn = mysqli_connect("localhost","root","","camellia");
$postid=$_GET['id'];
 $select=mysqli_query($conn,"SELECT * FROM `post` WHERE postid='$gradeid'");
while($row=mysqli_fetch_array($select)){
	$id=$row['postid'];
	$name=$row['postname'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update candidate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .candidate {
            width: 80%;
            margin: 50px auto;
            background-color: lightblue;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="number"],
        input[type="text"],
        input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
	<div class="candidate">

		<form action="" method="post">
			<h2>Update post</h2> <br>
			<label for="postname">Post Name :</label><br>
            <input type="text" name="postname"><br>
			<button type="submit" name="submit">Update post</button>
		</form>
	</div>
</body>
</html>
<?php

if(isset($_POST['submit'])){
	$postid=$_GET['id'];
   $postname = $_POST['postname'];
   $update="UPDATE `post`
    SET `postname`='$postname'
    WHERE postid=$postid";
   if($conn->query($update)){
     header("location:./post.php");
  }else{
      echo "error:".$update."<br>".$conn->error;
  }
}
?>
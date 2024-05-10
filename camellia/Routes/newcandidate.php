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
	<title>Add candidate</title>
</head>
<style>
    form{
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: fit-content;
        border: 1px solid #fff;
        font-size: larger;
        background: lightblue;
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
			<label for="candidatenationalid">National Id :</label><br>
			<input type="number" name="nationalid"><br>
			<label for="firstname">First Name :</label><br>
			<input type="text" name="fname" required><br>
			<label for="LastName">Last Name :</label><br>
			<input type="text"  name="lname"  required><br>
            <label for="Gender">Gender :</label><br>
            <div>
                <label for="Gender" required>Male</label>
                <input type="radio" name="gender" value="Male" name="gender">
            </div>
            <div>
			<label for="Gender" required >Female</label>
			<input type="radio" name="gender" value="Female" id="gende"><br>
</div>
			<label for="DateOfBirth" required>Date of Birth :</label><br>
			<input type="date" name="dob" required><br>
			<label for="DateOf exam">Exam Date :</label><br>
			<input type="date" name="dateofexam" required><br>
			<label for="DateOfBirth">phone number :</label><br>
			<input type="number" name="phone" required><br>
			<label for="DateOfBirth">Marks :</label><br>
			<input type="number" name="marks" required><br>
			<button type="submit" name="submit">Add candidate</button>
		</form>
	</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$nationalid=$_POST['nationalid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$marks=$_POST['marks'];
	$dateofexam=$_POST['dateofexam'];
	$phone=$_POST['phone'];
	$insert= "INSERT INTO candidateresult(`candidatenationalid`,`firstname`,`lastname`,`gender`,`dateofbirth`,`examdate`,`phonenumber`,`mark`)
	 VALUES('$nationalid','$fname','$lname','$gender','$dob','$dateofexam','$phone','$marks')";
	 if($conn->query($insert)){
		header("location:./candidate.php");
	 }else{
		echo "error".$insert."<br>".$conn->error;
	 }
}
?>
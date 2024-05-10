<?php
include "./nav.php";
$conn = mysqli_connect("localhost","root","","camellia");
$id=$_GET['id'];
 $select=mysqli_query($conn,"SELECT * FROM `candidateresult` WHERE candidatenationalid='$id'");
while($row=mysqli_fetch_array($select)){
	$nationalid=$row['candidatenationalid'];
	$FirstName=$row['firstname'];
	$LastName=$row['lastname'];
	$Gender=$row['gender'];
	$DOB=$row['dateofbirth'];
	$marks=$row['mark'];
	$ExamDate=$row['examdate'];
	$PhoneNumber=$row['phonenumber'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Candidate Information</title>
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
            <h2>Update Candidate Information</h2>
            <label for="CandidateNationalId">National Id:</label>
            <input type="number" name="nationalid" readonly value="<?php echo "$nationalid" ?>" required>
            <label for="FirstName">First Name:</label>
            <input type="text" name="fname" value="<?php echo "$FirstName" ?>" required>
            <label for="LastName">Last Name:</label>
            <input type="text" name="lname" value="<?php echo "$LastName" ?>" required>
            <label for="Gender">Gender:</label>
            <input type="text" name="gender" value="<?php echo "$Gender" ?>" id="gende">
            <label for="DateOfBirth">Date of Birth:</label>
            <input type="date" name="dob" value="<?php echo "$DOB" ?>" required>
            <label for="DateOfExam">Exam Date:</label>
            <input type="date" name="dateofexam" value="<?php echo "$ExamDate" ?>" required>
            <label for="PhoneNumber">Phone Number:</label>
            <input type="number" name="phone" value="<?php echo "$PhoneNumber" ?>" required>
            <label for="Marks">Marks:</label>
            <input type="number" name="marks" value="<?php echo "$marks" ?>" required>
            <button type="submit" name="submit">Update Candidate</button>
        </form>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
	$updates=$_GET['id'];

   $nationalid=$_POST['nationalid'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $marks=$_POST['marks'];
   $gender=$_POST['gender'];
   $gender=$_POST['gender'];
   $dob=$_POST['dob'];
   $dateofexam=$_POST['dateofexam'];
   $phone=$_POST['phone'];
   $update="UPDATE `candidateresult` SET firstname='$fname',lastname='$lname',gender='$gender',dateofbirth='$dob',examdate='$dateofexam',phonenumber='$phone',mark='$marks' WHERE candidatenationalid='$id' ";
    if($conn->query($update)){
	  header("location:./candidate.php");
   }else{
	   echo "error:".$update."<br>".$conn->error;
   }
}
?>
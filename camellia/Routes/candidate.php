<?php
  include "./nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Custom CSS for your post page */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin-top: 50px;
    color: #333;
    font-size: 36px;
}

.candidates {
    width: 80%;
    margin: 0 auto;
}

.add {
    /* display: block; */
    text-align: center;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    margin-bottom: -90px;
    margin-left: -980px;
}

.add:hover {
    background-color: lightblue;
    text-decoration: none;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th,
.table td {
    border: 1px solid #ccc;
    padding: 15px;
    text-align: center;
}

.table th {
    background-color: lightblue;
    color: #fff;
}

.table td {
    background-color: #fff;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table a {
    text-decoration: none;
    color: #007bff;
}

.table a:hover {
    text-decoration: underline;
    color: #0056b3;
}

</style>
</head>
<br><br><br><br><br><br><br><br><br>
    <div class="candidates">
       <center> <h2>Candidates</h2> </center>
       <center><a href="./newcandidate.php" class="add"> Add New Candidate</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Candidate nationalid</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Dateofbirth</th>
                    <th>Exam Date</th>
                    <th>Phone number</th>
                    <th>Marks</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM candidateresult";
                $result = mysqli_query($conn,$sql);
                if ($result == true) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['candidatenationalid']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['dateofbirth']; ?></td>
                            <td><?php echo $row['examdate']; ?></td>
                            <td><?php echo $row['phonenumber']; ?></td>
                            <td><?php echo $row['mark']; ?></td>
                            <td colspan="2"><a href="deletecandidate.php?id=<?php echo $row['candidatenationalid']?> ">Delete</a>
                            <a href="updatecandidate.php?id=<?php echo $row['candidatenationalid']?> ">Update</a>
                        </td>
                           
                        </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
              </center>
    </div>
    </body>
</html>
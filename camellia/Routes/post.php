<?php
include "./nav.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>post</title>
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
    margin-left: -990px;
}

.add:hover {
    background-color: lightblue;
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
<br><br><br><br><br><br>
       <center> <h1>Our Posts</h1> </center>
    <div class="candidates">
       <center> <a href="./newpost.php" class="add"> Add New post</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Post no</th>
                    <th>Post Name</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM post";
                $result = mysqli_query($conn,$sql);
                $postno =1;
                if ($result == true) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $postno++ ?></td>
                            <td><?php echo $row['postname']; ?></td>
                            <td><a href="updatepost.php?id=<?php echo $row['postid']?> ">Update</a></td>
                            <td><a href="deletepost.php?id=<?php echo $row['postid']?> ">Delete</a></td>
                           
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
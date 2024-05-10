
<?php
$conn = mysqli_connect("localhost","root","","camellia");
if (isset($_GET['id'])) {
    $candidate_id = $_GET['id'];
        $sql2 = "DELETE FROM `candidateresult` WHERE `candidatenationalid`=$candidate_id";   
        $result2 = mysqli_query($conn,$sql2);
        if ($result2) {
           header('location:./candidate.php');
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>

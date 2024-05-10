
<?php
$conn = mysqli_connect("localhost","root","","camellia");
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
    
    $sql = "DELETE FROM `candidateresult` WHERE `postid`='$post_id'";
    $result = mysqli_query($conn,$sql);
    if ($result === TRUE) {
        $sql2 = "DELETE FROM `post` WHERE `postid`='$post_id'";   
        $result2 = mysqli_query($conn,$sql2);
        if ($result2) {
           header('location:./post.php');
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

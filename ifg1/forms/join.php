<?php
if (isset($_POST['submit'])) {
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['sex'];
    $d = $_POST['education'];
    $e = $_POST['phone'];
    $f = $_POST['category'];
    $g = $_POST['message'];

    include "connect.php";

    $qx = "INSERT INTO `join_us`(`tid`, `name`, `email`, `sex`, `education`, `phone`, `category`, `message`) VALUES ('','$a','$b','$c','$d','$e','$f','$g')";

    if (mysqli_query($con, $qx)) {
        echo "Data submitted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

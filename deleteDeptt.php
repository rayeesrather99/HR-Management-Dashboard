<?php
$con = mysqli_connect("localhost", "root", "", "hrm");

if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$d_id = $_GET['d_id'];

$sql = "DELETE FROM `department` WHERE id = '$d_id'";

if (mysqli_query($con, $sql)) {
    echo "DEPARTMENT DELETED SUCCESSFULLY";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>

<?php
$con = mysqli_connect("localhost", "root", "", "hrm");

if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$e_id = $_GET['id']; // Assuming "id" is the employee ID parameter

$sql = "DELETE FROM `employee` WHERE id = '$e_id'";

if (mysqli_query($con, $sql)) {
    echo "EMPLOYEE DELETED SUCCESSFULLY";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>

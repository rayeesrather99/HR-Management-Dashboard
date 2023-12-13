<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "", "hrm");

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    // Add code to update other fields as well.

    $sql = "UPDATE `employee` SET `fname`='$fname', `address`='$address' WHERE `id`='$id'";
    if (mysqli_query($con, $sql)) {
        echo "Employee information updated successfully.";
    } else {
        echo "Error updating employee information: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>

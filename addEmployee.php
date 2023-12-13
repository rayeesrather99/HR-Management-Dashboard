<?php
// Establish a database connection
$con = mysqli_connect("localhost", "root", "", "hrm");

if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Retrieve and sanitize input values
$eId = strtoupper(mysqli_real_escape_string($con, $_POST['eId']));
$eFname = mysqli_real_escape_string($con, $_POST['eFname']);
$eMname = mysqli_real_escape_string($con, $_POST['eMname']);
$eSname = mysqli_real_escape_string($con, $_POST['eSname']);
$eAddress = mysqli_real_escape_string($con, $_POST['eAddress']);
$eAadharNo = mysqli_real_escape_string($con, $_POST['eAadhar']);
$eDesignation = mysqli_real_escape_string($con, $_POST['eDesignation']);
$eSalary = mysqli_real_escape_string($con, $_POST['eSalary']);
$eDob = mysqli_real_escape_string($con, $_POST['eDob']);
$eGender = strtoupper(mysqli_real_escape_string($con, $_POST['eGender']));
$eManagerId = strtoupper(mysqli_real_escape_string($con, $_POST['eManagerId']));
$eDepartmentId = strtoupper(mysqli_real_escape_string($con, $_POST['eDepartmentId']));

// Construct and execute the SQL query
$sql = "INSERT INTO `employee` (`id`, `fname`, `mname`, `sname`, `address`, `adhar_no`, `desig`, `salary`, `dob`, `gender`, `mgr_id`, `deptt_id`) VALUES ('$eId', '$eFname', '$eMname', '$eSname', '$eAddress', '$eAadharNo', '$eDesignation', '$eSalary', '$eDob', '$eGender', '$eManagerId', '$eDepartmentId')";

if (mysqli_query($con, $sql)) {
    echo "Employee Added Successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>

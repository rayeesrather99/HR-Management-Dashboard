<?php
   
    $did = $_POST['ddid'];
    $dname = $_POST['dname'];
    $dbudget = $_POST['dbudget'];
    $ddoe = $_POST['ddoe'];


    // die("DID= ". $did);

    $con = mysqli_connect("localhost","root","","hrm");

    if(!$con){
        die("Database Base Connection Failed");
    }

    $sql = "INSERT INTO `department`(`id`, `name`, `budget`, `date_of_estb`) 
            VALUES ('" .  $did . "','".  $dname ."'," . $dbudget. ",'".  $ddoe ."');";

    if(mysqli_query($con,$sql)){
        die("Department Added Successfully");
    }  
?>
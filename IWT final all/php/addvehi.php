<?php
    include_once "dbconn.php";

    $cid = $_POST["cid"];
    $vrn = $_POST["vrn"];
    $type = $_POST["type"];
    $chassisNum = $_POST["chassis_number"];
    $pid = $_POST["pid"];

    $sql = "insert into vehicles (CID, VRN, type, chassis_number, PID)
    values ('$cid', '$vrn', '$type', '$chassisNum', '$pid');";

    $run = mysqli_query($conn, $sql) or die(mysqli_error());

    if($run){
        header("Location: ../e_account.php");
        echo '<script> alert("Form submitted successfully") </script>';
    }
?>
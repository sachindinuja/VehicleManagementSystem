<?php
    include_once "php/dbconn.php";
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);

    while($row = $result -> fetch_assoc()) {
        if($row["SID"] == 1 ) { // staff ID
            $accName = $row["name"];
            break;
        } 
    }
?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/e_account.css">
    <title>Account</title>
</head>

<body>
    <!-- header, navigation and footer *****************-->
    
    <nav class="header">
        <h1>vehicle<span>Shield</span></h1>
        <ul>
            <li><a class="active" href="#"><?php echo $accName; ?></a></li>
            <li> | </li>
            <li><a href="">Packages</a></li>
            <li><a href="e_vehicle.php">Vehicles</a></li>
            <li> | </li>
            <li><a href="">logout</a></li>
        </ul>
    </nav>

    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>

    <!--************************************************-->
    

</body>

</html>
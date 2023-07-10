<?php
    include_once "php/dbconn.php";
    $sql = "SELECT * FROM customer";
    $result = $conn->query($sql);

    while($row = $result -> fetch_assoc()) {
        if($row["CID"] == 4 ) { // user ID
            $accName = $row["name"];
            break;
        } 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/all vehi.css">
    <title>Account</title>
</head>

<body>
    <!-- header, navigation and footer *****************-->
    
    <nav class="header">
        <h1>vehicle<span>Shield</span></h1>
        <ul>
            <li><a href="c_account.php"><?php echo $accName; ?></a></li>
            <li> | </li>
            <li><a href="">Packages</a></li>
            <li><a class="active" href="">Vehicles</a></li>
            <li><a href="">Feedback</a></li>
            <li> | </li>
            <li><a href="">logout</a></li>
        </ul>
    </nav>

    <h2 style="text-align:center">ABC INSURANCE</h2>
    <p style="text-align:center">Confindent Ride</p>
    <br>

    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>

    <!--************************************************-->
    

</body>

</html>
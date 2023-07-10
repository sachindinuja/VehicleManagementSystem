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



    function showVehicles($conn) {
        $sql2 = "SELECT * FROM vehicles";
        $result2 = $conn->query($sql2);

        while($row = $result2 -> fetch_assoc()) {
            if($row["CID"] == 4 ) {
                $vrn = $row["VRN"];
                $type = $row["type"];
                $pid = $row["PID"];

                $sql3 = "SELECT * FROM packages";
                $result3 = $conn->query($sql3);
                while($row = $result3 -> fetch_assoc()) {
                    if($row["PID"] == $pid) {
                        $pkgName = $row["name"];
                        $pkgPrice = $row["price"];

                        echo ("<div class=\"vehi\"> <h3>$vrn</h3>");
                        echo ("<ul> <li><h4>$type</h4></li> <br> <li><h4>Package: $pkgName</h4></li>");
                        echo ("<li><h4>Price: $pkgPrice</h4></li> </ul>");
                        echo ("</div>");
                    }
                }
            }
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/c_account.css">
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
            <li><a href="all vehicles.php">Vehicles</a></li>
            <li><a href="">Feedback</a></li>
            <li> | </li>
            <li><a href="">logout</a></li>
        </ul>
    </nav>

    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>

    <!--************************************************-->
    
    <div id="bodydiv">
        <h2>Vehicles</h2>
        <?php showVehicles($conn) ?>
    </div>

</body>

</html>
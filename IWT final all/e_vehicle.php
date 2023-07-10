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
    <link rel="stylesheet" href="css/e_vehicle.css">
    <script src="js/e_vehicle.js"></script>
    <title>Add/Remove Vehicles</title>
</head>

<body>
    <!-- header, navigation and footer *****************-->
    
    <nav class="header">
        <h1>vehicle<span>Shield</span></h1>
        <ul>
            <li><a href="e_account.php"><?php echo $accName; ?></a></li>
            <li> | </li>
            <li><a href="">Packages</a></li>
            <li><a class="active" href="">Vehicles</a></li>
            <li> | </li>
            <li><a href="">logout</a></li>
        </ul>
    </nav>

    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>

    <!--************************************************-->
    
    <div id="bodydiv">
        <div id="addVehi">
            <h2>Add vehicle</h2> <br><br>

            <form action="php/addvehi.php", method="POST">
                <div class="form_field">
                    <b>Customer ID</b> <input type="text" name="cid" id="cid" pattern="[0-9]" required placeholder="CID"> <br>
                </div>
                <div class="form_field">
                    <b>Vehicle Registration Number</b> <input type="text" name="vrn" id="vrn" pattern="[A-Z]{2,3}$+\-[0-9]{4}$"
                    title="Must be 7-8 characters long. must hvae a ' - '" required placeholder="ABC-1234"> <br>
                </div>
                <div class="form_field">
                    <b>Vehicle Type</b> <input type="text" name="type" id="type" required placeholder="car, cab, bike, van, truck, bus"> <br>
                </div>
                <div class="form_field">
                    <b>Chassis Number</b> <input type="text" name="chassis_number" id="chassis_number" pattern="[0-9]{17}"
                    title="Must only have 17 number" required placeholder="12345678912345678"> <br>
                </div>
                <div class="form_field">
                    <b>Package ID</b> <input type="text" name="pid" id="pid" pattern="[1-7]{1}" required placeholder="PID"
                    title="1 to 7"> <br>
                </div>
                <button type="submit">Add</button>
                <br><br>
            </form>
        </div>
    </div>

</body>

</html>
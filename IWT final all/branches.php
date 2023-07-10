<?php
    include_once "php/dbconn.php";
    $sql = "SELECT * FROM branches";
    $result = $conn->query($sql);                
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/branches.css">
    <title>Branches</title>
</head>

<body>
    <!-- header, navigation and footer *****************-->
    <nav class="header">
        <h1>vehicle<span>Shield</span></h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="packages.html">Packages</a></li>
            <li><a class="active" href="#">Branches</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </nav>

    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>
    
    <!--************************************************-->

    <div id="bodydiv">
        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1
            m8!1m3!1d15843.194046863206!2d79.9729445!3d6.9146775!3m2!1i1024!2i7
            68!4f13.1!3m3!1m2!1s0x0%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Instit
            ute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v16530853383
            39!5m2!1sen!2slk" 
            width="1000" height="800" style="border:0;" allowfullscreen="" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div id="branchDetails">
            <h3><br>Our locations <br><br></h3>
            <ul>
                <?php
                while($row = $result -> fetch_assoc()) {                   
                    $bName = $row["branch_name"];
                    echo ("<li class=\"loca\"> $bName </li>");
                    }
                ?>
            </ul><br>

            <img src="images/sliit-information-technology-malabe-campus.png" alt="img">
            <img src="images/sliit-information-technology-matara-campus.png" alt="img">
            <img src="images/sliit-information-technology-metro-campus.png" alt="img">
            <img src="images/kandy.jpg" alt="img">
            <img src="images/slit-a.2.jpg" alt="img">
            <img src="images/sliit-asd.jpg" alt="img">
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>

<?php require_once("php/db_connection.php"); ?>

<?php

if(isset($_POST['streetAddress1'])){
	$streetaddress1 = ($_POST["streetAddress1"]);
	$streetaddress2 = ($_POST["streetAddress2"]);
	$city = ($_POST["city"]);
	$state = ($_POST["state"]);
	$postal = ($_POST["postal"]);
	$country = ($_POST["country"]);
	$email = ($_POST["email"]);
	$cardholdername = ($_POST["cardholdersname"]);
	$cardnumber = ($_POST["cardnumber"]);
	$expiry = ($_POST["expiry"]);


	$query  = "INSERT INTO payment (";
	$query .= " address1, address2, city, state, postal, country, email, cardholdersname, cardnumber, expiry";
	$query .= ") VALUES (";
	$query .= " '{$streetaddress1}', '{$streetaddress2}', '{$city}', '{$state}', '{$postal}', '{$country}', '{$email}', '{$cardholdername}', '{$cardnumber}', '{$expiry}'";
	$query .= ");";
	$result = mysqli_query($connection, $query);
	
	if($result){
		$_SESSION["message"] = "Values added";
	} else {
		$_SESSION["message"] = "Values Adding Failed";
	}
}
?>

<head>
    <link rel="stylesheet" href="css/home.css">
	
    <title>vehicleShield</title>
	

</head>

<body>
    <!-- header, navigation and footer *****************-->
    <nav class="header">
        <h1>vehicle<span>Shield</span></h1>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="packages.html">Packages</a></li>
            <li><a href="branches.html">Branches</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="login.html">login</a></li>
        </ul>
    </nav>
	 <!-- heading *****************-->
	<h1> <u>payment</h1>
	<br>
	 <!-- subheading *****************-->
	<h4> About the card holder </h4>
	<br>
	 <!-- form *****************-->
	 
	 <form action="payment.php" method="POST">
			<label>street Address</label>
			<input type="text" name="streetAddress1" placeholder="street Address" required><br><br>
			<label>street Address2</label>
			<input type="text" name="streetAddress2" placeholder="street Address2" required><br><br>
			<label>City</label>
			<input type="text" name="city" placeholder="city" required>
			<label>state / province</label>
			<input type="text" name="state" placeholder="state" required><br><br>
			<label>postal / zip code</label>
			<input type="text" name="postal" placeholder="postal" required>
			<label>country</label>
			<input type="text" name="country" placeholder="country" required><br><br>
			<label>E-mail</label>
			<input type="email" name="email" pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required placeholder="email"><br><br><br>
	<!-- subheading *****************-->
	<h4> About the card </h4>
	<br>
			
			<input type="radio" name="ctype" value="Visa">Visa <img src="Images\card.jpeg"  alt="payment2Image" style="width:5%">
			<input type="radio" name="ctype" value="Master Card">Master Card <img src="Images\master.jpg"  alt="payment2Image" style="width:5%">
			<input type="radio" name="ctype" value="AMERICAN EXPRESS">AMERICAN EXPRESS <img src="Images\american.jpg"  alt="payment2Image" style="width:5%">
			<input type="radio" name="ctype" value="DISCOVER NETWORK">DISCOVER NETWORK <img src="Images\discover.jpg"  alt="payment2Image" style="width:5%"><br/><br>
			<label>Cardholder's Name</label>
			<input type="text" name="cardholdersname" placeholder="cardholdersname"><br><br>
			<label>Card Number</label>
			<input type="text" name="cardnumber" placeholder="cardNumber" required><br><br>
		

			<label>Expiry</label>
			<input type="date" name="expiry"><br><br>
			
			<input type="submit" name="submit" value="Next"/>
			
			</form>
			<br><br>
			
			<input type="checkbox" name="chkterms" id="checkbox" onclick="enableButton()">
			<p id="text" style="display:none">Checkbox is CHECKED!</p>
	
    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>

    <!--************************************************-->
    

</body>

</html>
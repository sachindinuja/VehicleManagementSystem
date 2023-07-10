<?php
require 'php/config.php';
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/about.css">
    <title>About</title>
</head>

<body>
    <!-- header, navigation and footer *****************-->
    <nav class="header">
        <h1>vehicle<span>Shield</span></h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="packages.html">Packages</a></li>
            <li><a href="branches.php">Branches</a></li>
            <li><a class="active" href="#">About</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </nav>
	<h2><center>About vehicle Shield</center></h2>
	<p><center>Vehicle Shield Ltd. is  fully-owned subsidiaries of Shield pvt Ltd, a global financial services provider with services predominantly in the insurance and asset management business, headquartered in Mumbai, India.
	</center></p><br>
	<p><center>Having started out as a greenfield operation in 2005, Vehicle Shield Ltd. has emerged as one of the fastest growing insurance service providers in Sri Lanka.</center></p><br>
	<p><center>The global strength and solid capitalization of the Shield  Group, coupled with local expertise and business know-how, have been Vehicle Shield's powerful formula for success.</center></p><br>
	<p><center>We pride on supporting our client's business strategy by understanding their risk profile and needs, and providing tailor-made solutions from our world class portfolio of products and services.</center></p><br>
	
	
	<h2>Our Vission</h2>
	<p>To be the first choice insurer for customers.</p>
	<p>To be the preferred employer in the insurance industry.</p>
	<p>To be the number one insurer for creating shareholder value.</p>
	
	<h2><center>Our Mission</center></h2>
	<img src="images\teamwork.jpg" width="100%" height="20%" alt="Picture of teamwork"  align="left">
	<p>As a responsible,customer-focused market leader, we will strive to understand the insurance needs of our customers and translate this into affordable products that deliver value for money.</p><br><br><br><br><br><br><br><br><br><br>
	<br>
	<h2><center>Board of Directeres     <center></h2>
	
	<div class="container">
		
		<div class="gallery">
			<img src="images\lapolo.jpg">
				<div class="desc"> Mr.Kane Lapolo</div>
		</div>
		
		<div class="gallery">
			<img src="images\sahan.jpg">
				<div class="desc"> Mr.Sahan Perera</div>
		</div>
		
		<div class="gallery">
			<img src="images\tom.jpg">
				<div class="desc"> Mr.Tom Curren</div>
		</div>
		
		<div class="gallery">
			<img src="images\FredDiaz.jpg">
				<div class="desc"> Mr.Fred Diaz</div>
		</div>
		
		<div class="gallery">
			<img src="images\jeevan.jpg">
				<div class="desc"> Mr.Jeevan samarasinghe</div>
		</div>
		
		<div class="gallery">
			<img src="images\roy1.jpg">
				<div class="desc"> Mr.Roy haris</div>
		</div>
	</div>
	
	<h2>Contact Info</h2><br>
	<p>Vehicle Shield,</p>
	<p>No.49, Viharamahadevi</p>
	<p>Mawatha,Colombo 07, Sri Lanka</p>
	<br>
	<br>
	<p>Email: vehicleshield@ceylon.lk</p>
	<p>Phone:</p>
	<?php
		$sql = "SELECT * FROM contact where Phone = '0112254752';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo $row['Phone']. "<br>";
				break;
			}
		}
	?>
	
	
    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>
    
    <!--************************************************-->

</body>

</html>
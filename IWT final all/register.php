<?php
session_start();

   include("php/connection.php");
   include("php/function.php");
   
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
	  //something was posted
	  $user_name = $_POST['user_name'];
	  $password = $_POST['password'];
	  
	  if(!empty($user_name)&& !empty($password) && !is_numeric($user_name))
	  {
		  //save to database
		  $user_id = random_num(20);
		  $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
		  
		  mysqli_query($con, $query);
		  
		  header("Location: login.php");
		  die;
	  }
	  else
	  {
		  echo "Please enter some valid information!";
	  }
  }

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<script src="js/register.js"></script>
    <title>Register</title>
</head>

<body>
    <!-- header, navigation and footer *****************-->
    <nav class="header">
        <h1>vehicle<span>Shield</span></h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="packages.html">Packages</a></li>
            <li><a href="branches.php">Branches</a></li>
            <li><a href="about.html">About</a></li>
            <li><a class="active" href="#">login</a></li>
        </ul>
    </nav>
	
	<form method="post">
	<div style="font-size:30px;margin:10px;color: white;">Register</div><br>
	
	<form  target="_self" method="Post" onsubmit="return checkPassword()" action = "submitRegistration.php" method="POST">
	 <label>First name</label><br/>
	  <input type="text" name="Firstname" placeholder="First name" required><br><br/>
	  
	  <label>Last name</label><br/>
	  <input type="text" name="Lastname" placeholder="Last name" required><br><br/>
	  <label>user name</label><br/>
	  <input type="text" type="text" placeholder="Enter first name" name="user_name"><br><br>
	 Gender: <br/>
	  <input type="radio" name="gender" value="Male">Male
	  <input type="radio" name="gender" value="Female">Female<br/><br/>
	  
	  <label>Mobile number: </label><br>
	  <input type="phone" name="mobile" pattern="[0-9]{10}" required placeholder="0778895544"><br><br>
	  
	  <label>E-mail</label><br>
      <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="abc@gmail.com" required><br><br>
    
	  <label>Address</label><br>
	  <textarea type="address" name="address" rows="6" cols="50" required></textarea><br><br>
	  
	   <label>DOB</label><br>
	   <input type="date" name="dob"><br><br>
	   
	   <label>Password</label><br>
	   <input type="password" name="password" id="pwd1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
	   
	   
	   <label>Re-enter Password</label><br>
	   <input type="password" name="reenterpass" id="pwd2" required><br><br>
	   <br>
	   <input type="checkbox" name ="chkTerms" onchange='AcceptTerms()'  id ="chkTerms">Accept privacy policy and terms<br><br>
	   <input type="submit" value="Submit" name="btnSub" id="subReg" disabled><br><br>
	  
	  
	  <a href="login.php">Click to Login</a><br><br>
	 </form> 
	 
    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>
    
    <!--************************************************-->


</body>

</html>
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
		  //read from database
		 
		  $query = "select * from users where user_name = '$user_name' limit 1";  
		  $result = mysqli_query($con, $query);
		  
		  if($result)
		  {
			  if($result && mysqli_num_rows($result) > 0)
		    {
			  $user_data = mysqli_fetch_assoc($result);
			  
			  if($user_data['password'] === $password)
			  {
				  $_SESSION['user_id'] = $user_data['user_id'];
				  header("Location: c_account.php");
				  die;
			  }
		    }
		  }
		  echo "wrong username or password!";
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
    <title>Login </title>
</head>

<body>
    <!-- header, navigation and footer *****************-->
    <nav class="header">
        <h1>vehicle<span>Shield</span></h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="packages.html">Packages</a></li>
            <li><a href="branches.php">Branches</a></li>
            <li><a href="about.php">About</a></li>
            <li><a class="active" href="#">login</a></li>
        </ul>
    </nav>
	
	<div class = "box">
	<img src="images/user.png" class="User">
	
	<h1>Login Here</h1>
	
	<form method="post">
	<p>Username</p>
	  <input type="text" name="user_name" placeholder="Enter Username Here">
	  
	  <p>Password</p>
	  <input type="password" name="password" placeholder="Enter Password">
	  
	  <input type="submit" value="Login">
	  <a href = "#">Lost your Password</a></br>
	  <a href="register.php">Don't Have an Account - click to register</a>
	 </form>
	</div> 
	 
    <footer>
        <p>Copyright &copy; 2022, vehicleShield.Inc</p>
    </footer>
    
    <!--************************************************-->

</body>
</html>
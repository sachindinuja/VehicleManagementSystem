<?php

  $Firstname = $_POST['Firstname'];
  $Lastname = $_POST['Lastname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $password = $_POST['password'];
  
  
  //database connection
  $conn = new mysqli('localhost','root','','test');
  if($conn->connect_error){
	  die('Connection failed: '.$conn->connect_error);
	  
  }
  else{
	  $stmt = $conn->prepare("insert into registration(Firstname,Lastname,gender,mobile,email,address,dob,password) values(?,?,?,?,?,?,?,?)");
	  $stmt->bind_param("sssissis",$Firstname,$Lastname,$gender,$mobile,$email,$address,$dob,$password);
	  $stmt->execute();
	  echo "registration successfully...";
	  $stmt->close();
	  $conn->close();
  }
?>
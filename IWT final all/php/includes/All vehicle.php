<?php
include_once 'includes/dbh.inc,php';

$sql= "select *from vehicles:";
$result=mysqli_quary($conn,$sql);


if($resultcheck >0){
while($row=mysqlifetch_assoc($result)){
echo $row[;vehicle number']."<br>";

?>

<!DOCTYPE html>
<html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
<fieldset>
<legend>vehicle</legend>
<form name="vehicle from" method="post" action="vehicle.php">
<p>
<label for="vehicle number">vehicle number </label>
<input type="varchar" name="vehicle number" id="varchar vehicle number">
</p>
<p>
<label for="user name">user name</label>
<input type="char" name="user name" id="charuser name">
</p>
<p>
<label for="exp date">exp date</label>
<input type="date" name="dateexp date" id="dateexp date">
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>
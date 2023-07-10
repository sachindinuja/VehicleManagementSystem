<?php
// database connection code

if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
@@ -19,4 +21,10 @@
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";

}
?>
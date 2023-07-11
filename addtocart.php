<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "sample-order";  

	$con = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$message = $_POST['message'];


	$con->query("INSERT INTO contact (name, email, contact, message) VALUES('$name', '$email', '$contact', '$message')")or die($con->error);

	$message = "Thank you for your response!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.location = 'contact.html';</script>";
}
?>
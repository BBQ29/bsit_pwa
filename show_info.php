<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['middlename'];
	$address=$_POST['lastname'];
	$birthdate=$_POST['birthdate'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$contact_no=$_POST['contact_no'];
	$civil_stat=$_POST['civil_stat'];
	$gender=$_POST['gender'];
	
	//mysqli_query($conn,"update user set firstname='$firstname', lastname='$lastname', address='$address' where userid='$id'");
	header('location:index.php');

?>
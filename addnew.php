<?php
	include('conn.php');
	
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$birthdate=$_POST['birthdate'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$contact_no=$_POST['contact_no'];
	$civil_stat=$_POST['civil_stat'];
	$gender=$_POST['gender'];
	$education_level=$_POST['education_level'];
	
	mysqli_query($conn,"insert into user (firstname, middlename, lastname, birthdate, age, address, contact_no, civil_stat, gender, education_level) values ('$firstname', '$middlename', '$lastname', '$birthdate', '$age', '$address', '$contact_no', '$civil_stat', '$gender', '$education_level')");
	header('location:index.php');

?>
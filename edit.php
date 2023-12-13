<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$birthdate=$_POST['birthdate'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$contact_no=$_POST['contact_no'];
	$civil_stat=$_POST['civil_stat'];
	$gender=$_POST['gender'];
	
	mysqli_query($conn,"update user set firstname='$firstname', middlename='$middlename', lastname='$lastname', birthdate='$birthdate', age='$age', address='$address', contact_no='$contact_no', civil_stat='$civil_stat', gender='$gender' where userid='$id'");
	header('location:index.php');

?>
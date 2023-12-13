<?php
include('conn.php');

// Fetch total number of users
// Fetch total number of users
$total_users_query = mysqli_query($conn, "SELECT COUNT(*) as total_users FROM `user`");
$total_users_data = mysqli_fetch_assoc($total_users_query);
$total_users = $total_users_data['total_users'];

// Fetch number of male users
$male_users_query = mysqli_query($conn, "SELECT COUNT(*) as male_users FROM `user` WHERE gender = 'Male'");
$male_users_data = mysqli_fetch_assoc($male_users_query);
$male_users = $male_users_data['male_users'];

// Fetch number of female users
$female_users_query = mysqli_query($conn, "SELECT COUNT(*) as female_users FROM `user` WHERE gender = 'Female'");
$female_users_data = mysqli_fetch_assoc($female_users_query);
$female_users = $female_users_data['female_users'];

// Fetch number of deleted users (adjust the condition as needed)
// $deleted_users_query = mysqli_query($conn, "SELECT COUNT(*) as deleted_users FROM `user` WHERE status = 'Deleted'");
// $deleted_users_data = mysqli_fetch_assoc($deleted_users_query);
// $deleted_users = $deleted_users_data['deleted_users'];
?>
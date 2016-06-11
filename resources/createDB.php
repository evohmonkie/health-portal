<?php
include('connect.php');

// Create Users
$createUsers = "CREATE TABLE users(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50),
	password VARCHAR(50),
	email VARCHAR(50),
	created_date TIMESTAMP,
	locked enum('0', '1') NOT NULL)";

if(mysqli_query($connect, $createUsers)) {
	echo "Successfully created users";
} else {
	echo "Failed to create users: " . mysqli_error($connect) . "<br />";
}

// Create Accounts
$createAccounts = "CREATE TABLE accounts(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	phone VARCHAR(10),
	street VARCHAR(50),
	city VARCHAR(50),
	state VARCHAR(50),
	zip VARCHAR(50),
	create_date TIMESTAMP,
	modified_date DATETIME)";

if(mysqli_query($connect, $createAccounts)) {
	echo "Successfully created accounts";
} else {
	echo "Failed to create accounts: " . mysqli_error($connect) . "<br />";
}

// Create Providers
$createProviders = "CREATE TABLE providers(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NPI INT(10),
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	create_date TIMESTAMP,
	modified_date DATETIME)";

if(mysqli_query($connect, $createProviders)) {
	echo "Successfully created providers";
} else {
	echo "Failed to create providers: " . mysqli_error($connect) . "<br />";
}

// Create Patients
$createPatients = "CREATE TABLE patients(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	MRN VARCHAR(50),
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	sex ENUM('u', 'm', 'f') NOT NULL,
	dob DATE,
	phone VARCHAR(10), 
	create_date TIMESTAMP,
	modified_date DATETIME)";

if(mysqli_query($connect, $createPatients)) {
 	echo "Successfully created patients";
} else {
	echo "Failed to create patients: " . mysqli_error($connect) . "<br />";
}

// Create Tests
$createTests = "CREATE TABLE tests(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(10))";

if(mysqli_query($connect, $createTests)) {
 	echo "Successfully created tests";
} else {
	echo "Failed to create tests: " . mysqli_error($connect) . "<br />";
}

// Create Billing Types
$createPayors = "CREATE TABLE payors(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	type ENUM('medicare', 'medicaid', 'insurance', 'patient'),
	create_date TIMESTAMP,
	modified_date DATETIME)";

if(mysqli_query($connect, $createPayors)) {
 	echo "Successfully created payors";
} else {
	echo "Failed to create payors: " . mysqli_error($connect) . "<br />";
}
?>
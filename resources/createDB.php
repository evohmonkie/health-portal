<?php
include('connect.php');

// Create Users
$createUsers = "CREATE TABLE users(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50),
	password VARCHAR(50),
	email VARCHAR(50),
	created_date TIMESTAMP,
	locked enum('0', '1') NOT NULL
)";

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
	modified_date DATETIME
)";

if(mysqli_query($connect, $createAccounts)) {
	echo "Successfully created accounts";
} else {
	echo "Failed to create accounts: " . mysqli_error($connect) . "<br />";
};

// Create Providers
$createProviders = "CREATE TABLE providers(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NPI INT(10),
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	create_date TIMESTAMP,
	modified_date DATETIME
)";
if(mysqli_query($connect, $createAccounts)) {
	echo "Successfully created accounts";
} else {
	echo "Failed to create accounts: " . mysqli_error($connect) . "<br />";
};
// Create Patients
// Create Tests
// Create Billing Types

?>
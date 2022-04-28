<?php
include_once("./db_config.php");
$sql = 'create database stock_management;';

if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error;
}

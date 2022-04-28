<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'stock_management';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} else {
	echo "Connected successfully...";
}

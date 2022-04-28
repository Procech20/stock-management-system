<?php
include_once("../config/db_config.php");
$sql = 'create table accounts(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Names varchar(150) not null, Email varchar(150) not null, Password varchar(150) not null);';
$result = $conn->query($sql);
if ($result === TRUE) {
	echo "Table users created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

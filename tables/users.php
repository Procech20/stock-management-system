<?php
	include_once("../config/db_config.php");
	$sql = 'create table users(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname varchar(150) not null, lastname varchar(150) not null,  email varchar(150) not null, password varchar(150) not null;';
	$result = $conn->query($sql);
	if($result === TRUE){
		echo "Table users created successfully";
	}
	else{
		echo "Error creating table: " . $conn->error;
	}
?>

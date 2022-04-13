<?php
	include_once("../database/config.php");
	$sql = 'create table users(id int auto_increment key, firstname varchar(150) not null, lastname varchar(150) not null,  email varchar(150) not null, password varchar(150) not null;';
	$result = $conn->query($sql);
	if($result === TRUE){
		echo "Table users created successfully";
	}
	else{
		echo "Error creating table: " . $conn->error;
	}
?>

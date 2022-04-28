<?php
	include_once("../config/db_config.php");
	$sql = 'create table products(id int auto_increment key, name varchar(150) not null, price int not null, description varchar(250));';
	$result = $conn->query($sql);
	if($result === TRUE){
		echo "Table products created successfully";
	}
	else{
		echo "Error creating table: " . $conn->error;
	}
?>

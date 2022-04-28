<?php
	include_once("../config/db_config.php");
	$sql = 'create table stock(id int auto_increment key, product int not null, type varchar(150) not null, quantity int not null);';
	$result = $conn->query($sql);
	if($result === TRUE){
		echo "Table stock created successfully";
	}
	else{
		echo "Error creating table: " . $conn->error;
	}
?>

<?php
	include_once("../config/db_config.php");
	$sql = 'create table report(id int auto_increment key);';
	$result = $conn->query($sql);
	if($result === TRUE){
		echo "Table report created successfully";
	}
	else{
		echo "Error creating table: " . $conn->error;
	}
?>

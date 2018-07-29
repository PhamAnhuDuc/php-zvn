<?php
	$conn = new mysqli('localhost', 'root', '', 'crud_ajax_test');
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>

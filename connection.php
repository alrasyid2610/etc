<?php  
	$con = new mysqli("localhost", 'root', '', 'edp');

	if (!$con) {
		die(mysqli_connect_error());
	}
?>
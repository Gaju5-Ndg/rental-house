<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'Gaju', '1234', 'house_rent');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>
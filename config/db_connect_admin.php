<?php 

	//PDO or MySQLI to connect

	$connect = mysqli_connect('localhost', 'root', '', 'supermarketdb1');

	// check connection

	if (!$connect) {
		echo "Connection error: " . msqli_connect_error();
	}

 ?>

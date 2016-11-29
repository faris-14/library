<?php

	//*** create a connection object
    $conn = mysqli_connect('127.0.0.1', 'root', 'qwe123!@#','Dbproject');



// Check connection
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




?>

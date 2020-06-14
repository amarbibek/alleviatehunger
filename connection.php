<?php
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
	echo "connection error";
    die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn, 'alleviatehunger' );
// echo "Connected successfully";
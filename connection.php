<?php
$host= 'localhost';
$user= 'root';
$conn =mysqli_connect($host, $user)
	or die ("Could not connect");
$dbname= 'bankx';
mysqli_select_db($conn,$dbname);
?>
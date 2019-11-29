<?php
$conn=mysqli_connect("localhost","root","","thg");
if ($conn->connect_error) 
{
	echo "Connection Failed!!<br>";
	die("Connection failed: " . $conn->connect_error);
}
?>
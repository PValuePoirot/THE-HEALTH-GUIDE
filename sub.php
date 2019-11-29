<?php
$servername="localhost";
$username="root";
$password="";
$dbname="thg";
$conn=mysqli_connect($servername, $username,$password,$dbname);

$email=$_POST['Email'];


$sql="INSERT INTO subscribe values('$email');";


mysqli_query($conn ,$sql);
header("Location:shop.php");




?>

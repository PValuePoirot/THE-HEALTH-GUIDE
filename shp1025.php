<?php
$servername="localhost";
$username="root";
$password="";
$dbname="thg";
$conn=mysqli_connect($servername, $username,$password,$dbname);

//$email=$_POST['Email'];


$sql="UPDATE products set quantity=quantity-1 where price=1025 ;";


mysqli_query($conn ,$sql);
?>
<html>
<body bgcolor="#9999999">
    <p1> <b><center>HERE IS YOUR DIET PLAN
        <p1></b>
<strong><i><p>
    <img src="liquid.jpg"></center>
    <?php


echo "<br/>";
$sql="SELECT *  FROM products where price=1025";
echo "<br/>";
$result=mysqli_query($conn ,$sql);
if(!$result)
{
    die("failed".mysqli_error($conn));
}
while($row=mysqli_fetch_array($result))
{
    echo      "You have purchased 1 bottle of"." ".$row['pname']."  ".$row['quantity']." ". ", products left.";
    echo "<br/>";
    echo "<br/>";
    echo " Your product will be delivered in 3-4 days..";
      
    echo "<br/>";
    echo "<br/>";
    echo "THANK YOU FOR PURCHASING ..!! ";
    
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
}






?>

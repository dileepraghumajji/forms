<?php
session_start();

$conn = new mysqli( "localhost","root","","forms") or die("could  not connect");


$name=$_POST=["name"];
$email=$_POST=["email"];
$password=$_POST=["password"]

$query = "INSERT INTO forms(name,email,password) values($name,$email,$password)";
mysqli_query($conn,$query);
header("location : homepage.html")  ;
}
?>
<?php


$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","user");
mysqli_query($c,"INSERT INTO `register` (`username`, `email`, `password`) 
VALUES ('$username', '$email', '$password');");
mysqli_close($c);

echo("ثبت نام شما با موفقیت انجام شد ✅");

?>
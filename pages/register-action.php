<?php

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","Myshop");
$result=mysqli_query($c,"INSERT INTO `user` (`username`, `email`, `password`) 
VALUES ('$username', '$email', '$password');");
mysqli_close($c);


if($result===true)
{
    ?>
    <script>
        location.replace("../index.php");
    </script>
    <?php
}else
{
    echo("در عملیات ثبت نام مشکلی پیش آمده");
}


?>



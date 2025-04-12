<?php

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","user");
$result=mysqli_query($c,"INSERT INTO `register` (`username`, `email`, `password`) 
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



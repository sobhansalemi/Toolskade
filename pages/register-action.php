<?php

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

include("sql.php");
$result=mysqli_query($link,"INSERT INTO `user` (`username`, `email`, `password`) 
VALUES ('$username', '$email', '$password');");
mysqli_close($link);


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



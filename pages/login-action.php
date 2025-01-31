<?php

$username=$_POST['username'];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","user");
$m=mysqli_query($c,"SELECT `username`, `password` FROM `register` WHERE `username`='$username' and `password`='$password'");
mysqli_close($c);

$r=mysqli_fetch_array($m);
if($r){
    echo("شما با موفقیت وارد شدید");
}else{
    echo("نام کاربری یا رمز عبور صحیح نیست");
}

?>
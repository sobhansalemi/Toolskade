<?php
$host = 'localhost';
$username = 'toolsk_sobhan';
$password = '123456';
$database = 'toolsk_myshop';

$link = mysqli_connect($host, $username, $password, $database);

if (!$link) {
    die("اتصال به دیتابیس Failed: " . mysqli_connect_error());
}
?>
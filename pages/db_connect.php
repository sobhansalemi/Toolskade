<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'myshop';

$link = mysqli_connect($host, $username, $password, $database);

if (!$link) {
    die("اتصال به دیتابیس Failed: " . mysqli_connect_error());
}
?>
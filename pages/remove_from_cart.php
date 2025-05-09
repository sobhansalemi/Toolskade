<?php
include("header.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['index'])) {
    $index = (int)$_GET['index'];

    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

header('Location: cart.php');
exit();
?>
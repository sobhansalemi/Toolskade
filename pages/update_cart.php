<?php
session_start();

if (isset($_GET['action'], $_GET['index'])) {
    $index = (int) $_GET['index'];

    if (isset($_SESSION['cart'][$index])) {
        if ($_GET['action'] === 'increase') {
            $_SESSION['cart'][$index]['quantity']++;
        } elseif ($_GET['action'] === 'decrease') {
            $_SESSION['cart'][$index]['quantity']--;
            if ($_SESSION['cart'][$index]['quantity'] < 1) {
                unset($_SESSION['cart'][$index]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            }
        }
    }
}

header("Location: cart.php");
exit;
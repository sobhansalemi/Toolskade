<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];

    // اگر سبد خرید وجود ندارد، ایجاد کن
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $found = false;

    // بررسی اینکه محصول قبلا اضافه شده یا نه
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $id) {
            $item['quantity']++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'quantity' => 1
        ];
    }

    header("Location: shopping.php"); // یا هر صفحه‌ای که محصولات نمایش داده میشن
    exit;
}
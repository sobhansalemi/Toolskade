<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>سبد خرید</title>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
        margin-top: 60px;
    }
    body {
        font-family: 'Vazir', sans-serif;
        background-color: #f8f9fa;
        padding: 40px;
        direction: rtl;
        text-align: right;
    }

    h2 {
        color: #343a40;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
        background-color: white;
        border-collapse: collapse;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    th, td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #dee2e6;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    tr:last-child td {
        border-bottom: none;
    }

    button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #218838;
    }
    .btn {
        padding: 2px 6px;
        margin: 0 2px;
        text-decoration: none;
        font-size: 16px;
        background: #007bff;
        color: white;
        border-radius: 4px;
     }
</style>
</head>
<body>

<h2 style="text-align:center;">سبد خرید شما:</h2>


<?php
$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>

<table>
    <tr>
        <th>نام محصول</th>
        <th>قیمت</th>
        <th>تعداد</th>
        <th>جمع</th>
        <th>عملیات</th>
    </tr>
    <?php foreach ($cart as $index => $item):
        $subtotal = $item['price'] * $item['quantity'];
        $total += $subtotal;
    ?>
    <tr>
        <td><?= htmlspecialchars($item['name']) ?></td>
        <td><?= number_format($item['price']) ?></td>
        <td>
            <a class="btn" href="update_cart.php?action=decrease&index=<?= $index ?>">−</a>
            <?= $item['quantity'] ?>
            <a class="btn" href="update_cart.php?action=increase&index=<?= $index ?>">+</a>
        </td>
        <td><?= number_format($subtotal) ?></td>
        <td><a class="btn" style="background:crimson;" href="remove_from_cart.php?index=<?= $index ?>">حذف</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<p style="text-align:center;"><strong>مجموع کل: <?= number_format($total) ?> تومان</strong></p>

<a href="shopping.php" style="display:block;text-align:center;">بازگشت به محصولات</a>

</body>
</html>
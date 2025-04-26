<?php

include("header.php");
$title = $_POST["title"];
$text = $_POST["text"];
$price = $_POST["price"];
$flagsaveok = true;
$messege = "";

// بررسی وجود فایل
if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

    // بررسی نوع فایل
    if ($extension != "jpg") {
        $flagsaveok = false;
        // $messege = "فقط فایل با پسوند jpg مجاز است.";
        echo "<div style='margin-top: 80px; font-size:50px; color:red;'>فقط فایل با پسوند jpg مجاز است.</div>";
    } else {
        // ایجاد نام یکتا برای فایل
        $imageName = uniqid() . "." . $extension;
        $imageurl = "../images/" . $imageName;

        // ایجاد پوشه در صورت عدم وجود
        if (!is_dir("images")) {
            mkdir("images", 0777, true);
        }

        // آپلود فایل
        $upload = move_uploaded_file($_FILES["image"]["tmp_name"], $imageurl);

        if ($upload == false) {
            $flagsaveok = false;
           // $messege = "در آپلود فایل مشکلی پیش آمده است.";
            echo "<div style='margin-top: 80px; font-size:50px; color:red;'>در آپلود فایل مشکلی پیش آمده است.</div>";
        }
    }
} else {
    $flagsaveok = false;
   // $messege = "فایلی انتخاب نشده است یا خطایی در ارسال فایل رخ داده.";
    echo "<div style='margin-top: 80px; font-size:50px; color:red;'>فایلی انتخاب نشده است یا خطایی در ارسال فایل رخ داده.</div>";
}

// اگر همه چیز درست بود، ذخیره در پایگاه داده
if ($flagsaveok) {
    $link = mysqli_connect("localhost", "root", "", "Myshop");

    if (!$link) {
        die("خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
    }

    // استفاده از real_escape_string برای امنیت بیشتر
    $title = mysqli_real_escape_string($link, $title);
    $text = mysqli_real_escape_string($link, $text);
    $imageurl = mysqli_real_escape_string($link, $imageurl);

    $query = "INSERT INTO product (title, text,price, imageurl) VALUES ('$title', '$text','$price', '$imageurl')";
    $result = mysqli_query($link, $query);
    mysqli_close($link);

    if ($result === true) {
        echo "<script>location.replace('product.php');</script>";
    } else {
        $messege= "در عملیات ثبت نام مشکلی پیش آمده است.";
        echo "<div style='margin-top: 60px;'>$messege</div>";
    }
} else {
    echo $messege;
}
include("footer.html"); 
?>



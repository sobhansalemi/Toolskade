<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ابزار کده</title>
    <link rel="icon" href="images/logo/tools.png" type="image/ico"  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Bootstrap 5 css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <!-- Bootstrap 5 css -->

    <!-- My css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
    <!-- My css -->

    
</head>
<body class="rtl">
       <!--Home--> 
        <div id="home">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a href="#" class="navbar-brand">
                    <img class="icon" src="../images/logo/tools.png" alt="ابزار کده" width="40" height="40">
                </a>
                <a class="navbar-brand" href="#">سایت  ابزار  کده </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php"> خانه <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../index.php">خدمات ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/shopping.php">محصولات</a>
                    </li>
                    <?php if(isset($_SESSION["login"])){ ?>
                    <li class="nav-item">
                        <a class="nav-link " href="cart.php">سبد خرید</a>
                    </li><?php }?>

                    <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                    <li class="nav-item"><a class="nav-link" href="product.php">مدیریت</a></li>
                     <?php }else{
                     } ?>


                    </ul>
                    <ul class="navbar-nav ml-auto">

                        <?php if(isset($_SESSION["login"])){ ?>
                        <li class="nav-item"><a class="nav-link" href="logout.php">خروج</a></li>
                        <?php }else{ ?>
                        <li class="nav-item"><a class="nav-link" href="accounting.php">ورود | ثبت نام</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <main class="container">
                
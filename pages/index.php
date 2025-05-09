<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="فروش ابزار صنعتی با بهترین قیمت در فروشگاه تولزکده">
    <meta name="keywords" content="ابزار صنعتی, خرید ابزار, فروشگاه ابزار">
    <meta name="author" content="Toolskade">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ابزار کده</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="icon" href="images/logo/tools.png" type="image/ico"  />
    <!-- Bootstrap 5 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

    <!-- My css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="rtl">
       <!--Home--> 
        <div id="home">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a href="#" class="navbar-brand">
                    <img class="icon" src="images/logo/tools.png" alt="ابزار کده" width="40" height="40">
                </a>
                <a class="navbar-brand" href="#">سایت  ابزار  کده </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home"> خانه <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#about">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#services">خدمات ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/shopping.php">محصولات</a>
                    </li>
                    <?php if(isset($_SESSION["login"])){ ?>
                    <li class="nav-item">
                        <a class="nav-link " href="pages/cart.php">سبد خرید</a>
                    </li><?php }?>
                    
                    <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/product.php">مدیریت</a>
                    </li>
                     <?php }else{
                     } ?>

                    </ul>
                    <ul class="navbar-nav ml-auto">
                     <!--  <li class="nav-item">
                            <a class="nav-link " href="pages/accounting.php">ورود | ثبت نام</a>
                        </li> --> 
                        <?php if(isset($_SESSION["login"])){ ?>
                        <li class="nav-item"><a class="nav-link" href="pages/logout.php">خروج</a></li>
                        <?php }else{ ?>
                        <li class="nav-item"><a class="nav-link" href="pages/accounting.php">ورود | ثبت نام</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>

            <section class="landing">
                <div class="home-wrap">
                    <div class="home-inner">

                    </div>
                </div>
            </section>
            <section class="caption text-center">
                <h1>سایت ابزار فروشی امیر</h1>
                <h3> بزرگترین ارائه دهنده ابزار آلات گلدشت</h3>
                
            </section>
        </div>
       <!--End Home-->

       <!-- about us -->
        <div class="bg-white" id="about">
            <div class="col12 text-center area">
                <h2 class="section-title">سایت ابزار فروشی امیر</h2>
                <p class="section-subtitle"> سایت فروشگاهی از سبحان سالمی</p>
                <a href="pages/about.php" class="btn btn-primary custom-btn">درباره ما بیشتر بدانید</a>
            </div>
        </div>
       <!-- End about us -->

       <!-- Services -->

        <section class="services-section py-5" id="services">
        <div class="container">
            <h2 class="section-title text-center">خدمات ابزارکده</h2>
            <div class="underline mx-auto mb-4"></div>
            <div class="row text-center">
            <div class="col-md-6 mb-4">
                <div class="service-card p-4 shadow-sm rounded">
                <i class="fa fa-wrench fa-3x mb-3 text-primary"></i>
                <h4>تعمیرات</h4>
                <p>تعمیرات ابزار آلات خراب یا فرسوده شما توسط تیم مجرب ابزارکده.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="service-card p-4 shadow-sm rounded">
                <i class="fa fa-check-circle fa-3x mb-3 text-success"></i>
                <h4>گارانتی بلند مدت</h4>
                <p>ارائه گارانتی طولانی‌مدت محصولات برای آسودگی خاطر مشتریان.</p>
                </div>
            </div>
            </div>
        </div>
        </section>
       <!-- End Services -->

       <!-- Footer -->
            <footer class="site-footer text-center text-white" id="footer">
        <div class="container py-5">
            <div class="row">
            <div class="col-md-4 mb-4">
                <img src="images/logo/toolskade3.png" alt="لوگو ابزارکده" class="footer-logo mb-3">
                <p class="text-light">
                ابزار فروشی امیر شامل ابزار و رنگ، با بیش از 20 سال سابقه در شهر نجف‌آباد، گلدشت.
                </p>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="text-white">اطلاعات تماس</h5>
                <p class="mb-1">تلفن: 09139309085</p>
                <p class="mb-1">ایمیل: sobhansalemi12@gmail.com</p>
                <p class="mb-1">مکان: نبش مسجد مهدیه، گلدشت</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="text-white">دنبال کنید</h5>
                <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-telegram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            </div>
            <hr class="footer-hr">
            <p class="mt-3 small">© 2025 تمامی حقوق محفوظ است. استفاده با ذکر منبع مجاز است.</p>
        </div>
        </footer>
       <!--  End Footer -->

    <script src="js/jquery.min.3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
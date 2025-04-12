<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ابزار کده</title>
    <link rel="icon" href="images/logo/tools.png" type="image/ico"  />
    <!-- Bootstrap 5 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <!-- Bootstrap 5 css -->

    <!-- My css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- My css -->

    
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
                        <a class="nav-link" href="pages/shopping.html">سبد خرید</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#footer">پا صفحه</a>
                    </li>

                    <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/news.php">مدیریت</a>
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
                <h2>سایت ابزار فروشی امیر - سایت فروشگاهی از سبحان سالمی</h2>
                <a href="#" class="btn btn-secondray">درباره ما بیشتر بدانید</a>
            </div>
        </div>
       <!-- End about us -->

       <!-- Services -->
            <div class="services" id="services">
                <div class="jumbotron">
                    <div class="area text-center">
                        <div class="col-12 text-center">
                            <h2 class="title">خدمات ابزار کده</h2>
                            <div class="underline"></div>
                        </div>
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="service">
                                    <i class="fa fa-wrench fa-3x"></i>
                                    <h3>تعمیرات</h3>
                                    <p>یکی از مهمتری خدمات ما در ابزار کده تعمیرات ابزار آلات خراب شده یا غیر قابل استفاده ی شما است</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="service">
                                    <i class="fa fa-check-circle fa-3x"></i>
                                    <h3>گارانتی بلند مدت</h3>
                                    <p>یکی دیگر از خدمات ما ارائه دادن گارانتی طولانی مدت محصولات و ابزار آلات است</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <!-- End Services -->

       <!-- Footer -->
        <footer id="footer">
            <div class="row justify-content-center">
                <div class="col-md5 text-center">
                    <img src="images/logo/toolskade3.png" alt="لوگو">
                    <p>
                        مغازه ابزار فروشی امیر متشکل از دو مغازه رنگ فروشی و ابزار فروشی بیش از 20 سال است که در شهر گلدشت در حال خدمات رسانی به مردم است مغازه ابزار فروشی امیر در شهر نجف آباد گلدشت خیابان اصلی نبش مسجد مهدیه قرار دارد و از ساعات 6 تا 2 ظهر و 4 تا 9 شب در خدمت شما است
                    </p>
                    <p>
                        تلفن پشتیبانی : 09139309085
                        <br>
                        ایمیل پشتیبانی : sobhansalemi12@Gmail.com
                        <br> 
                        <a href="#">
                            <i class="fab fa-twitter-square">

                            </i>
                            <i class="fab fa-instagram">

                            </i>
                            <i class="fab fa-facebook">

                            </i>
                            <i class="fab fa-youtube">

                            </i>
                        </a>

                        <hr class="footer-hr">
                        <p>
                            استفاده از مطالب سایت تنها با درج لینک مستقیم به آن مطلب مجاز است
                        </p>
                    </p>
                </div>
            </div>
        </footer>
       <!--  End Footer -->

    <script src="js/jquery.min.3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
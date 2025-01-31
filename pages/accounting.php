<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود و ثبت نام</title>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

    <!-- My css -->
    <link rel="stylesheet" href="../css/login-register.css">
</head>
<body>

    <div class="main-box">
        <div class="form-box">
            <div class="button-box">
                <div id="account-btn"></div>
                <button type="button" class="toggle-btn" onclick="Register()">ثبت نام</button>
                <button type="button" class="toggle-btn" onclick="Login()">ورود</button>
            </div>
            <div class="social-icons">
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
            <form action="../pages/login-action.php" id="login" class="input-group" method="post" >
                <input type="text" class="inout-feild" placeholder="نام کاربری" name="username">
                <input type="password" class="inout-feild" placeholder="رمز عبور" name="password">
                <input type="checkbox" class="check-box">
                <span >
                    مرا به خاطر بسپار
                </span>
                <button type="submit" class="submit-btn">ورود </button>
                
            </form>

            <form action="../pages/register-action.php" id="register" class="input-group" method="post" >
                <input type="text" class="inout-feild" placeholder="نام کاربری" name="username">
                <input type="email" class="inout-feild" placeholder="ایمیل" name="email">
                <input type="password" class="inout-feild" placeholder="رمز عبور" name="password">
                <input type="checkbox" class="check-box">
                <span>
                    قوانین و مقررات سایت را می پذیرم
                </span>
                <button type="submit" class="submit-btn">ثبت نام</button>
            </form>
        </div>
    </div>

  <!-- Bootstrap 5 js -->
  <script src="../js/jquery.min.3.3.1.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- External js -->
    <script src="../js/login-register.js"></script>
</body>
</html>
<?php

?>
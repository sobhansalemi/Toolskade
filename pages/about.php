<?php
include("header.php");?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره من</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazirmatn', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            margin-top: 60px;
        }

        /* هدر */
        .header {
            background-color: #343434;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        .header h1 {
            font-size: 2em;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 1.1em;
            opacity: 0.9;
        }

        /* بخش اصلی */
        .container {
            max-width: 700px;
            margin: 30px auto;
            padding: 0 20px;
            text-align: center;
        }

        .about-me {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .about-me h2 {
            font-size: 1.5em;
            color: #222;
            margin-bottom: 15px;
        }

        .about-me p {
            font-size: 1em;
            color: #555;
        }

        .skills {
            margin: 20px 0;
        }

        .skills h2 {
            font-size: 1.5em;
            color: #222;
            margin-bottom: 15px;
        }

        .skills ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .skills li {
            background: #343434;
            color: white;
            padding: 8px 15px;
            border-radius: 15px;
            font-size: 0.9em;
        }

        /* تماس */
        .contact {
            font-size: 0.9em;
            color: #555;
        }

        .contact a {
            color: #343434;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact a:hover {
            color: #ccc;
        }

        /* ریسپانسیو */
        @media (max-width: 600px) {
            .header h1 {
                font-size: 1.8em;
            }

            .header p {
                font-size: 1em;
            }

            .about-me h2,
            .skills h2 {
                font-size: 1.3em;
            }
        }
    </style>
</head>
<body>
   
    <header class="header">
        <h1>سایت فروشگاهی ابزار کده </h1>
        <p>طراح سایت : سبحان سالمی</p>
    </header>

    
    <div class="container">
        <div class="about-me">
            <h2>درباره من</h2>
            <p>
                سبحان سالمی هستم رشته کامپیوتر هنرستان فرهنگ و ادب کلاس یازدهم 
                <br>
                دبیر : جناب آقای فتاحی
            </p>
        </div>

        <!-- مهارت‌ها یا علایق -->
        <div class="skills">
            <h2>مهارت‌ها و علایق</h2>
            <ul>
                <li>برنامه‌نویسی</li>
                <li>طراحی وب</li>
                <li>نقاشی</li>
                <li>مطالعه علمی</li>
            </ul>
        </div>

        <!-- تماس -->
        <div class="contact">
            <p>ارتباط با من: <a href="mailto:your.email@example.com">sobhansalemi12@gmail.com</a> | <a href="tel:+989123456789">09107249680</a></p>
        </div>
    </div>
</body>
</html>
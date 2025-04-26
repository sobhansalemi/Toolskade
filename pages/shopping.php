<?php
include("header.php");

// اتصال به دیتابیس
$link = mysqli_connect("localhost", "root", "", "myshop");
if (!$link) {
    die("خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
}

// واکشی محصولات
$query = "SELECT * FROM product";
$result = mysqli_query($link, $query);

// بستن اتصال بعد از واکشی
mysqli_close($link);
?>

  <div class="container">
    <h1 class="text-center">ابزار های پرفروش</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Brass Padlock/Brass Padlock.png" class="card-img-top" alt="قفل برنجی">
          <div class="card-body">
            <h5 class="card-title">قفل برنجی</h5>
            <p class="card-text">قفل برنجی با مقاومت بالا و طراحی زیبا برای تأمین امنیت درب‌ها و وسایل مختلف استفاده می‌شود. ساخته شده از آلیاژ برنج، ضد زنگ و مقاوم در برابر فرسایش است. گزینه‌ای مناسب برای استفاده در محیط‌های داخلی و خارجی</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>90.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Cordless Impact Drill/Cordless Impact Drill.png" class="card-img-top" alt="مته ضربه ای">
          <div class="card-body">
            <h5 class="card-title">دریل ضربه ای</h5>
            <p class="card-text">دریل ضربه‌ای مناسب برای سوراخ‌کاری در سطوح سخت مانند بتن و آجر است. با ترکیب حرکت چرخشی و ضربه‌ای، این ابزار قدرت و سرعت بالا را برای انجام پروژه‌های مختلف فراهم می‌کند. ایده‌آل برای استفاده در خانه و محل کار</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>1.700.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Diamond Wheel/Bosun F5CE Diamond Wheel.png" class="card-img-top" alt="چرخ الماس">
          <div class="card-body">
            <h5 class="card-title">چرخ الماس</h5>
            <p class="card-text">چرخ الماس برای برش سطوح سخت مانند سنگ، سرامیک و بتن طراحی شده است. با استفاده از دانه‌های الماس مقاوم، این چرخ برش سرعت و دقت بالایی را ارائه می‌دهد و برای پروژه‌های ساخت و ساز و تعمیرات ایده‌آل است</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>700.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Hammer Drill/Hammer Drill.jpg" class="card-img-top" alt="درایو مته چکشی">
          <div class="card-body">
            <h5 class="card-title">درایو مته چکشی</h5>
            <p class="card-text">درایو مته چکشی ابزاری حرفه‌ای برای سوراخ‌کاری در سطوح سخت مانند بتن و آجر است. این دستگاه با ترکیب حرکت چرخشی و ضربه‌ای، امکان سوراخ‌کاری سریع و دقیق را فراهم می‌کند </p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>4.000.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Hinges/Hinges1.png" class="card-img-top" alt="لولا">
          <div class="card-body">
            <h5 class="card-title">لولا</h5>
            <p class="card-text">لولا ابزاری است که برای اتصال درب‌ها و پنجره‌ها به قاب‌ها استفاده می‌شود. این قطعه امکان حرکت آسان درب‌ها را فراهم کرده و در انواع مختلف برای کاربردهای خانگی و صنعتی موجود است</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>20.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Multi-Use Spray/Multi-Use Spray.jpg" class="card-img-top" alt="اسپری چندکاره">
          <div class="card-body">
            <h5 class="card-title">اسپری چند کاره</h5>
            <p class="card-text">اسپری چند کاره برای روان‌سازی، تمیزکاری و محافظت از سطوح مختلف طراحی شده است. این محصول با خاصیت ضدزنگ و روان‌کنندگی، برای رفع صدا و تعمیرات جزئی ایده‌آل است</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>90.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Paint Brush/Paint Brush.png" class="card-img-top" alt="برس رنگ">
          <div class="card-body">
            <h5 class="card-title">برس رنگ</h5>
            <p class="card-text">برس رنگ ابزاری است برای اعمال رنگ به سطوح مختلف. با طراحی خاص خود، این برس به شما کمک می‌کند رنگ را به‌صورت یکنواخت و دقیق روی دیوارها، چوب و فلزات اعمال کنید</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>40.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Safety Eyewear/Safety Eyewear1.png" class="card-img-top" alt="عینک ایمنی">
          <div class="card-body">
            <h5 class="card-title">عینک ایمنی</h5>
            <p class="card-text">عینک ایمنی برای محافظت از چشم‌ها در برابر گرد و غبار، مواد شیمیایی و ضربه‌ها طراحی شده است. این ابزار ضروری در محیط‌های کاری و صنعتی است که نیاز به محافظت از چشم‌ها دارد</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>30.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Screwdriver/Screwdriver.png" class="card-img-top" alt="پیچ گوشتی">
          <div class="card-body">
            <h5 class="card-title">پیچ گوشتی</h5>
            <p class="card-text">پیچ گوشتی ابزاری کاربردی برای باز و بسته کردن پیچ‌ها است. با انواع مختلف سری، این ابزار برای انجام تعمیرات، نصب و پروژه‌های خانگی است. طراحی ارگونومیک آن استفاده راحت و دقیق را فراهم می‌کند</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>50.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>



      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../images/logo/tools/Trowel/trowel1.png" class="card-img-top" alt="ماله">
          <div class="card-body">
            <h5 class="card-title">ماله</h5>
            <p class="card-text">ماله ابزاری است برای صاف و هموار کردن سطوحی مانند بتن، گچ یا سیمان. این ابزار در کارهای ساخت‌وساز و نقاشی برای ایجاد سطحی یکنواخت و صاف استفاده می‌شود</p>
          </div>

          <div class="d-flex justify-content-around mb-2">
            <h3>100.000</h3>
            <button class="btn btn-primary">خرید</button>
          </div>

        </div>
      </div>






      <div class="col">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card" style="width: 18rem;">';
            echo '<img class="card-img-top" src="' . htmlspecialchars($row['imageurl']) . '" alt="تصویر محصول">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
            echo '<p class="card-text">' . htmlspecialchars($row['text']) . '</p>';
            echo '</div>';
            echo '<div class="d-flex justify-content-around mb-2">';
            echo '<h3>' . htmlspecialchars($row['price']) . '</h3>';
            echo '<button class="btn btn-primary">خرید</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
      </div>


    </div>
  </div>


  <!-- Bootstrap 5 js -->
  <script src="../js/jquery.min.3.3.1.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- External js -->
  <script src="../js/script.js"></script>
</body>
</html>

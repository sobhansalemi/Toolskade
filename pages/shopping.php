<?php
include("header.php");


include("sql.php");
if (!$link) {
    die("خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
}


$query = "SELECT * FROM product";
$result = mysqli_query($link, $query);


mysqli_close($link);
?>

  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

    

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="product-card">';
            //echo '<div class="card" style="width: 18rem;">';
            echo '<img class="product-image" src="' . htmlspecialchars($row['imageurl']) . '" alt="$title">';
            echo '<div class="product-info">';
            echo '<h3 class="product-title">' . htmlspecialchars($row['title']) . '</h3>';
            echo '<p class="product-description">' . htmlspecialchars($row['text']) . '</p>';
          //  echo '</div>';
            echo '<div class="product-footer">';
            echo '<span class="product-price">' . htmlspecialchars($row['price']) . '</span>';
            echo '<form method="post" action="add_to_cart.php">';
            echo '<input type="hidden" name="product_id" value="' . $row["id"] . '">';
            echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($row["title"]) . '">';
            echo '<input type="hidden" name="product_price" value="' . $row["price"] . '">';
            echo '<button type="submit" class="btn btn-primary btn-buy">افزودن به سبد خرید</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
      
    </div>
  </div>




  <!-- Bootstrap 5 js -->
  <script src="../js/jquery.min.3.3.1.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- External js -->
</body>
</html>

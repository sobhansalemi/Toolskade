<?php
include("header.php");

$id=$_POST["id"];
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","Myshop");
$result=mysqli_query($link,"UPDATE `product` SET `title`='$title',`text`='$text',`imageurl`='$imageurl',`price`='$price' WHERE `id`=$id");
mysqli_close($link);

if($result===true)
{
    ?>
    <script>
        location.replace("product.php");
    </script>
    <?php
}else
{
    echo("در عملیات ثبت نام مشکلی پیش آمده");
}

include("footer.html");
?>
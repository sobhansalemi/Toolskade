<?php
include("header.php");
$title="";
$text="";
$imageurl="";
if(isset( $_GET["id"])){

    $id=$_GET["id"];
    include("sql.php");
    $result=mysqli_query($link,"SELECT * FROM `product` WHERE `id`=$id");
    mysqli_close($link);
    $row=mysqli_fetch_array($result);
    if($row){
        $title=$row["title"];
        $text=$row["price"];
        $price=$row["text"];
        $imageurl=$row["imageurl"];
    }
}
?>
        <form class="row" action="product_edit_action.php" method="post" enctype="multipart/form-data" style="margin-top: 100px;">
            <input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر" value="<?php echo($imageurl); ?>">
            <input class="col-12 col-md m-2" type="text" name="id" hidden placeholder="id" value="<?php echo($id); ?>">
            <input class="col-12 col-md m-2" type="text" name="title" placeholder="عنوان" value="<?php echo($title); ?>">
            <input class="col-12 col-md m-2" type="text" name="text" placeholder="متن محصول" value="<?php echo($text); ?>">
            <input class="col-12 col-md m-2" type="text" name="price" placeholder="قیمت محصول" value="<?php echo($price); ?>">
            <input class="col-12 col-md m-2" type="submit" value="ذخیره">
        </form>
<?php
include("footer.html");
?>
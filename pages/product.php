<?php
include("header.php");

if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true)
{

}else{
    
    header("Location: ../index.php");
     exit;
    
}
?>
<div class="row">
    <p class="col ht" style="margin-top: 100px; font-size: 60px;">
        <a href="product_add.php" class="add">+</a>
        لیست محصولات
    </p>
</div>

<?php 
include("sql.php");
$result=mysqli_query($link,"SELECT * FROM `product`");
mysqli_close($link);

$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row-card  m-4">
    <img class="card-image" src="<?php echo($row["imageurl"]); ?>" alt="">
    <span class="col-12 m-2 h5"><?php echo($row["title"]); ?></span>
    <span class="col-12 m-2"><?php echo($row["text"]); ?></span>
    <span class="col-12 m-2"><?php echo($row["price"]); ?></span>
    <div class="col butt">
        <a class="btn btn-success" href="product_edit.php?id=<?php echo($row["id"]); ?>">edit</a>
        <a class="btn btn-danger" href="product_delete.php?id=<?php echo($row["id"]); ?>">delete</a>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
}
?>

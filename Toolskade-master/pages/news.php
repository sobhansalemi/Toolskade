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
    <p class="col ht">
        <a href="news_add.php" class="add">+</a>
        لیست اخبار
    </p>
</div>

<?php 
$link=mysqli_connect("localhost","root","","user");
$result=mysqli_query($link,"SELECT * FROM `news`");
mysqli_close($link);

$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row card  m-1">
    <img class="card-image" src="<?php echo($row["imageurl"]); ?>" alt="">
    <span class="col-12 m-2 h5"><?php echo($row["title"]); ?></span>
    <span class="col-12 m-2"><?php echo($row["text"]); ?></span>
    <div class="col">
        <a class="btn btn-success" href="news_edit.php?id=<?php echo($row["id"]); ?>">*</a>
        <a class="btn btn-danger" href="news_delete.php?id=<?php echo($row["id"]); ?>">-</a>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
}
?>
<?php
include("footer.html");
?>
<?php
include("header.html");
$id=$_GET["id"];
$fileurl="";

$link=mysqli_connect("localhost","root","","user");
$result=mysqli_query($link,"SELECT * FROM `news` WHERE `id`=$id;");
mysqli_close($link);
$row=mysqli_fetch_array($result);

if($row)
{
    $fileurl=$row["imageurl"];
}

$delete=unlink($fileurl);
if($delete==true)
{
    $link=mysqli_connect("localhost","root","","user");
    $result=mysqli_query($link,"DELETE FROM `news` WHERE `id`=$id;");
    mysqli_close($link);
}
    if($result==true){
    
    ?>

<div class="row">
    <div class="col">
    <script>
        location.replace("news.php");
    </script>
    </div>
</div>
<?php
    }else{
        echo("در عملیات مشکلی پیش آمده است.");
    }
?>
<?php
include("footer.html");
?>
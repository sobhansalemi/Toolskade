<?php
include("header.php");


$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];
$massege="";
$flagsaveok=true;

$imageurl="images/".$image;

if(file_exists($imageurl)){
    $flagsaveok=false;
    $massege.="فایل مشابه در سرور وجود دارد";

}

$size=($_FILES["image"]["size"]);
if($size>10*1024*1024){
    $flagsaveok=false;
    $massege.="حجم فایل بیشتر از 50 مگابایت است";
}

$extension=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
if($extension!="jpg")
{
    $flagsaveok=false;
    $massege.="نوع فایل باید jpg باشد";
}



$upload=move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
if($upload==false)
{
    $flagsaveok=false;
    $massege+="در اپلود فایل مشکلی پیش امده است";
}

if($flagsaveok)
{

    $link=mysqli_connect("localhost","root","","user");
    $result=mysqli_query($link,"INSERT INTO `news`(`title`, `text`, `imageurl`) VALUES ('$title','$text','$imageurl')");
    mysqli_close($link);
    
    if($result===true)
    {
        ?>
        <script>
            location.replace("news.php");
        </script>
        <?php
    }else
    {
        echo("در عملیات ثبت نام مشکلی پیش آمده");
    }
}else{
    echo($massege);
}


include("footer.html");
?>
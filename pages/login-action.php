<?php
session_start();
?>
<?php
$username=$_POST['username'];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","user");
$m=mysqli_query($c,"SELECT * FROM `register` WHERE `username`='$username' and `password`='$password'");
mysqli_close($c);

$r=mysqli_fetch_array($m);
if($r){
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$r["admin"];
    ?>
    <script>
        location.replace("../index.php");
    </script>
    <?php
}else{
    echo("نام کاربری یا رمز عبور صحیح نیست");
}

?>
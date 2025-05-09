<?php
session_start();
?>
<?php
$username=$_POST['username'];
$password=$_POST["password"];

include("sql.php");
$result=mysqli_query($link,"SELECT * FROM `user` WHERE `username`='$username' and `password`='$password'");
mysqli_close($link);

$row=mysqli_fetch_array($result);
if($row){
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];
    ?>
    <script>
        location.replace("../index.php");
    </script>
    <?php
}else{
    echo("نام کاربری یا رمز عبور صحیح نیست");
}

?>
<?php
session_start();


$con = mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'userlogin');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num==1){
    header('location:http://localhost/userlogin/index.html');
}
else{
    header('location:login.php');
}
?>
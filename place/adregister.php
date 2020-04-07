<?php
session_start();
header("location:companyhome.php");
$con = mysqli_connect("localhost","root","","test");
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from adminlogin where Username = '$name' && Password = '$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    header("location:companyhome.php");
    echo" Username already taken";
}
else{
    $reg = "insert into adminlogin(Username,Password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo" Registeration Successful";    
}
?>
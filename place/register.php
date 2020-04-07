<?php

session_start();
header("location:studhome.php");

$con = mysqli_connect("localhost","root","","test");

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from login where username = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("location:studhome.php");
    echo" Username already taken";
}
else{
    $reg = "insert into login(username,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo" Registeration Successful";    
}

?>
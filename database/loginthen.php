<?php
session_start();

include('input.php');//获取数据的函数
include('db.php');

$input=new input();
$username=$input->post('username');

$_SESSION['username'] = $username;
$password=$input->post('password');

$length=strlen($username);

var_dump($username);var_dump($password);
var_dump($_SESSION);

$rows;

if($length==18){//学生登陆情况判断
$sql="SELECT tel from student WHERE IDcard='$username'";
$mysqli_result=$mysqli->query($sql);
while ($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[]=$row;//用数组一行的把拿出来的数据存入新建的数组
}
var_dump($rows);
$tel=$rows[0]['tel'];
var_dump($tel);
if($tel==$password){header("Location:Schoose.php");}
else{header("Location:login.php");}
}

else if($length==8){//商家登陆情况判断
$sql="SELECT tel from shop WHERE IDcard='$username'";
$mysqli_result=$mysqli->query($sql);
    while ($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[]=$row;//用数组一行的把拿出来的数据存入新建的数组
}
var_dump($rows);
$tel=$rows[0]['tel'];
//var_dump($tel);
if($tel==$password){
    header("Location:SPchoose.php");
}else {
    header("Location:login.php");}
}

else {
    header("Location:login.php");
    }
?>

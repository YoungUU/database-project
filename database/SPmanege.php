<?php
session_start();
$IDcard=$_SESSION['username'];//获取商家注册码

include('db.php');
include('input.php');
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
    <head>
    <title>学生信息管理</title>
    <link rel='stylesheet' href='style.css'/>
    <style>/*设置照片铺满屏幕*/
body{
  background:#fff url(image/Schoose.jpg) no-repeat left top;
  background-size:100%;
}/*设置登陆窗口*/
    </style>
    </head>
    <body>
    <br>
    <big><big><big><strong style="color:#FFFFFF;"><h1 style="text-align:center";>管理我的信息</h1></strong></big></big></big>
    <div><br/><br/></br>
    <div style="text-align:center;margin:0px"><a href="SPcheck.php";float:center;><h1 style="color:blue">删除我已发布</h1></a></div>
    <div style="text-align:center;margin:0px"><a href="SHOPup.php";float:center;><h1 style="color:blue">发布兼职信息</h1></a></div>
    <div style="clear:both";></div>
    <div style="TEXT-ALIGN: center;"><input type="button" value="返回"onclick="location.href='SPchoose.php'"></div>
    </div>
    </body>
</html>
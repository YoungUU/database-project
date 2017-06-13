<?php
include('db.php');
include('input.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type="text/css" href="style.css"/>
<style>
/*设置照片铺满屏幕*/
body{
  background:#fff url(image/背景1.jpg) no-repeat left top;
  background-size:100%;
}
/*设置登陆窗口*/
</style>
<title>管理员登录</title>
</head>
<body>
    </br></br></br><big><big><big><strong style="color:#FFFFFF"><h1 style="text-align:center";>You-Two兼职平台</h1></strong></big></big></big>
    <div class="login">
    <img src="image/登陆窗口.jpg" width="250" height="200">
    <form action="loginthen.php" method="POST">
        <div padding:10px auto;class="denglu">
            <pre>   <strong>用户名：</strong><input class="part" type='text' name='username'/></br>
            <pre>   <strong>密  码：</strong><input class="part" type='password' name='password'/></br></pre>
            &nbsp<input type='submit' value='点击登陆'style="background:#0091ca;color:white"/></br>
            &nbsp<a href="Ssignup.php";float:center;><strong>新用户注册</strong></a>
        </div>
      </div>
    </form>
</body>
</html>
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
    <style>
/*设置照片铺满屏幕*/
body{
  background:#fff url(image/temp.jpg) no-repeat left top;
  background-size:100%;
}
/*设置登陆窗口*/
</style>
    <title>职位信息发布</title>
    <link rel='stylesheet' href='style.css'/>
    </head>
    <big style="color:#FFFFFF"><h1 style="text-align:center;margin:50px">兼职信息发布</h1></big>
    <form action="SHOPupnext.php" method="POST">
    <div class="Ssignup">
            <h2  style="text-align:center;margin:16px">信息填写</h2>
            <strong>&nbsp&nbsp兼&nbsp职&nbsp号:&nbsp</strong><input class="part" name="ptn" type='text'/><br/>
            <strong>&nbsp&nbsp地&nbsp&nbsp&nbsp&nbsp址:&nbsp&nbsp</strong><input class="part" name="addr" type='text'/> <br/>
            <strong>&nbsp&nbsp工&nbsp&nbsp&nbsp&nbsp资:&nbsp&nbsp</strong><input class="part" name="salary" type='text'/><br/>
            <strong>&nbsp&nbsp工作性质:</strong></strong><input class="part" name="pt" type='text'/><br/>
            <strong>&nbsp&nbsp工作要求:</strong><input class="part" name="workrequest" type='text'/><br/>
            <strong>&nbsp&nbsp需要人数:</strong><input class="part" name="peoplen" type='text'/><br/>
            <strong>&nbsp&nbsp工作时间:</strong><input class="part" name="worktime" type='text'/><br/>
            <div class="part1"><input Type='submit'value='提交'/></div>
            <div style="TEXT-ALIGN: right;"><input type="button" value="返回"onclick="location.href='SPmanege.php'"></div>
    </div>
    </form>
    </body>
</html>
 
<?php
session_start();
$IDcard=$_SESSION['username'];//获取学生的身份证

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
    <title>求职信息发布</title>
    <link rel='stylesheet' href='style.css'/>
    </head>
    <big style="color:#FFFFFF"><h1 style="text-align:center;margin:40px">求职信息发布</h1></big>
    <form action="STUupnext.php" method="POST">
    <div class="Ssignup">
    <h1  style="text-align:center">信息填写</h1>
    </br>
            
            <strong>希望工资：</strong><input class="part" name="salary" type='text'/><br/></br>
            <strong>工作时间：</strong></strong><input class="part" name="employtime" type='text'/><br/>
            <strong>工作时长：</strong><input class="part" name="worktime" type='text'/><br/></br>
            <strong>求职者姓名:</strong><input class="part" name="employername" type='text'/><br/>
            <strong>兼职流水号:</strong><input class="part" name="postidcard" type='text'/><br/>
            <div class="part1"><input Type='submit'value='提交'/></div>
            <div style="TEXT-ALIGN: right;"><input type="button" value="返回"onclick="location.href='Smanege.php'"></div>
    </div>
    </form>
    </body>
</html>
 
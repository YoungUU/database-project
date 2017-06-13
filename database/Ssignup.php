<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
    <head>
    <style>
/*设置照片铺满屏幕*/
body{
  background:#fff url(image/Ssignup.jpg) no-repeat left top;
  background-size:100%;
}
/*设置登陆窗口*/
</style>
    <title>学生新用户注册</title>
    <link rel='stylesheet' href='style.css'/>
    </head>
    <form action="Ssave.php" method="POST">
    <div class="Ssignup"><br/><br/>
           <div class="bq"><input class="csrbutton blue" type="submit" value="学生注册" onclick="this.form.action='Ssignup.php';">
            <input class="csrbutton blue" type="submit" value="商家注册" onclick="this.form.action='SPsignup.php';"></div>
            <strong>身份 证号&nbsp：</strong><input class="part" name="IDcard" type='text'/><br/>
            <strong>名 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp字：&nbsp</strong></strong><input class="part" name="name" type='text'/><br/>
            <strong>年 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp龄：&nbsp</strong><input class="part" name="age" type='text'/> <br/>
            <strong>学 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp校：&nbsp</strong><input class="part" name="school" type='text'/><br/>
            <strong>专&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp业：&nbsp</strong><input class="part" name="prefession" type='text'/><br/>
            <strong>电&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp话：&nbsp</strong><input class="part" name="tel" type='text'/><br/>
            <strong>性&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp别：&nbsp</strong><input class="part" name="sex" type='text'/><br/>
            <div class="part1"><input Type='submit'value='提交'/></div>
    </div>
    </form>
    </body>
</html>
 
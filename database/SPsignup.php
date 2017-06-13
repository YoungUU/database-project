<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
    <head>
    <title>商家新用户注册</title>
    <link rel='stylesheet' href='style.css'/>
    <style>/*设置照片铺满屏幕*/
body{
  background:#fff url(image/Ssignup.jpg) no-repeat left top;
  background-size:100%;
}/*设置登陆窗口*/
    </style>
    </head>
    <body>
    <div class="Ssignup">
           <form action="SPsave.php"method="POST"><br/><br/>
            <div class="bq"><input class="csrbutton blue" type="submit" value="学生注册" onclick="this.form.action='Ssignup.php';">
             <input class="csrbutton blue" type="submit" value="商家注册" onclick="this.form.action='SPsignup.php';"></div>
            <strong> 企业&nbsp&nbsp代码：</strong><input class="part" name="IDcard" type='text'/><br/>
            <strong>企&nbsp&nbsp业&nbsp&nbsp&nbsp名：</strong><input class="part" name="name" type='text'/><br/>
            <strong>地&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp点:&nbsp</strong><input class="part"name="addr" type='text'/><br/>
            <strong>从事&nbsp&nbsp行业：</strong><input class="part"name="job" type='text'/><br/>
            <strong>注册&nbsp&nbsp时间：</strong><input class="part"name="time" type='text'/><br/>
            <strong>法定 代表人:</strong><input class="part"name="lawer" type='text'/><br/>
            <strong>联系&nbsp&nbsp电话：</strong><input class="part"name="tel" type='text'/>
            <div class="part1"><input Type='submit'value='提交'/></div>
          <form>
    </div>
    </body>
</html>
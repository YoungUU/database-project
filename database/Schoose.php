<?php
session_start();
//var_dump($_SESSION);

include('db.php');//导入数据库连接的语句
$sql="SELECT shop.name,post.* From post,shop WHERE shop.IDcard=post.SIDcard ORDER BY shop.score DESC";
$mysqli_result=$mysqli->query($sql);//将数据存入命令
//var_dump($mysqli_result);

$rows=array();//定义一个数组
while ($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[]=$row;//用数组一行一行的把拿出来的数据存入新建的数组
}//用循环的方式取出数据
//var_dump($rows);
//(MYSQLI_ASSOC)只取相关项
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
    <head>
    <title>商家信息</title>
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
    <big><big><big><strong style="color:#FFFFFF;"><h1 style="text-align:center";>商家信息</h1></strong></big></big></big>

    <div style="text-align:center;margin:0px"><a href="Smanege.php";float:center;><h1 style="color:blue">管理我的信息</h1></a></div>
    <div class="choose">  <div style="clear:both";></div>
     <?php
     foreach ($rows as $row) {$SIDcard = $row['SIDcard'];//循环读取数据
        ?>
        <div style="margin:5px" >
            <table background="image/名片.jpg" width="600px" height="102px" border="0"bgcolor="FFFFFF">
             <td><h3>店名：<?php echo $row['name'];?></h3></td>
             <td></td>
             <form action="charge.php" method="POST"><td align="right">
             <?php echo"<input type='radio' name='SID' value='$SIDcard' checked>"?>
             <input type='submit' value='选择此商家'style="background:#0091ca;color:white"/></td></form>
             
             <form action="details.php" method="POST"><td align="right">
             <?php echo"<input type='radio' name='SID' value='$SIDcard' checked>"?>
             <input type='submit' value='点击了解更多'style="background:#0091ca;color:white"/></td></form>
             <tr>
              <td >兼职代号：<?php echo $row['ptn'];?></td>
              <td>工作名：<?php echo $row['pt'];?></td>
              <td>地址：<?php echo $row['addr'];?></td>
              <td>工作时间：<?php echo $row['worktime'];?></td>
             </tr>
             <tr>
             <td>薪水：<?php echo $row['salary'];?></td>
             <td>需要人数：<?php echo $row['peoplen'];?></td>
             <td>工作要求：<?php echo $row['workrequest'];?></td>
             <td>商家号：<?php echo $row['SIDcard'];?></td>
            </tr>
           </table>
        </div>      
        <?php
        }
        ?>
    </div>
    </body>
</html>

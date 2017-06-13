<?php
session_start();
//var_dump($_SESSION);

include('db.php');//导入数据库连接的语句
$sql="SELECT student.score,employ.* From employ,student WHERE student.IDcard=employ.IDcard ORDER BY student.score DESC";
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
    </br><big><big><big><strong style="color:#FFFFFF"><h1 style="text-align:center";>学生信息</h1></strong></big></big></big> 
    <div style="text-align:center;"><a href="SPmanege.php";float:center;><h1 style="color:bule">兼职信息管理</h1></a></div>
    <div class="choose">
     <?php
        foreach ($rows as $row) {
        ?>
        <div>
            <table background="image/名片.jpg" width="600px" height="102px" border="0"bgcolor="FFFFFF">
             <td><h3>学生姓名：<?php echo $row['employername'];?></h3></td>
             <?php $IDcard=$row['IDcard'];?>

            <form action="charge1.php" method="POST"><td align="right">
             <?php echo"<input type='radio' name='IDcard' value='$IDcard' checked>"?>
             <input type='submit' value='选择此学生'style="background:#0091ca;color:white"/></td></form>      

             <form action="details1.php" method="POST"><td align="right">
             <?php echo"<input type='radio' name='IDcard' value='$IDcard' checked>"?>
             <input type='submit' value='点击了解更多'style="background:#0091ca;color:white"/></td></form>
             <tr>
              <td>身份证号：<?php echo $row['IDcard'];?></td>
              <td></td><td>信誉积分：<?php echo $row['score'];?></td></tr>
              <tr><td>工作时间：<?php echo $row['employtime'];?></td>
              <td></td><td>工作时长：<?php echo $row['worktime'];?></td></tr>
             </tr>
             <tr>
             <td>工资：<?php echo $row['salary'];?></td>
             <td></td><td>兼职代码：<?php echo $row['postidcard'];?></td>
            </tr>
           </table>
             <?php
        }
        ?>
    </div>
    </body>
</html>
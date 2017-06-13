<?php
session_start();
$IDcard=$_SESSION['username'];
//var_dump($IDcard);//获取商家的注册号

include('db.php');
include('input.php');
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
    <head>
    <title>商家兼职信息</title>
    <link rel='stylesheet' href='style.css'/>
    <style>/*设置照片铺满屏幕*/
body{
  background:#fff url(image/Schoose.jpg) no-repeat left top;
  background-size:100%;
}/*设置登陆窗口*/
    </style>
    </head>
    <body>
    </br></br></br><big><big><big><strong style="color:#FFFFFF"><h1 style="text-align:center";>我已发布的兼职</h1></strong></big></big></big>
    </body>
</html>
<?php
$rows=array();//将数据库中所有身份证为$IDcard的信息选出来并且列举出来。
$sql="SELECT * From post WHERE SIDcard=$IDcard";
$mysqli_result=$mysqli->query($sql);
while ($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[]=$row;//用数组一行的把拿出来的数据存入新建的数组
}//用循环的方式取出数据

?>
<?php
        foreach ($rows as $row) {//遍历所有数据并且在删除的时候把兼职号出给SPDELETE.PHP
        ?>
        <div style="TEXT-ALIGN: center">
            <table style="TEXT-ALIGN: left" align="center" background="image/名片.jpg" width="600px" height="102px" border="0"bgcolor="FFFFFF">
             <td><h3>兼职名称：<?php echo $row['pt'];?></h3></td> 
             <?PHP $ptn=$row['ptn']; ?> 
            <form action="SPDELETE.php" method="POST"><td align="right">
             <?php  echo"<input type='radio' name='ptn' value='$ptn' checked>"?>
             <input type='submit' value='删除'style="background:#0091ca;color:white"/></td></form>
             
             <?php $postidcard=$row['addr'];?>
             <tr>
              <td>身份证号：<?php echo $row['worktime'];?></td></tr>
              <tr><td>希望薪水：<?php echo $row['salary'];?></td>
              <td>工作时长：<?php echo $row['peoplen'];?></td></tr>
             </tr>
             <tr>
             <td>工作时长：<?php echo $row['workrequest'];?></td>
             <td>兼商家注册号：<?php echo $row['SIDcard'];?></td>
            </tr>
           </table>
        </div>
             <?php
        }
        ?>
        
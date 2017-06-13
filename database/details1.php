<?php
include('db.php');
include('input.php');
$input=new input();
$SIDcard=$input->post('IDcard');
$sql="SELECT * From student WHERE student.IDcard=$SIDcard";
$mysqli_result=$mysqli->query($sql);
$rows=array();//定义一个数组

while ($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[]=$row;//用数组一行一行的把拿出来的数据存入新建的数组
}
//var_dump($rows);
$IDcard=$rows[0]['IDcard'];
$name=$rows[0]['name'];
$age=$rows[0]['age'];
$school=$rows[0]['school'];
$profession=$rows[0]['profession'];
$tel=$rows[0]['tel'];
$sex=$rows[0]['sex'];
$score=$rows[0]['score'];
?>

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
    <head>
    <title>商家详细信息</title>
    <style>/*设置照片铺满屏幕*/
   body{
    background:#fff url(image/Schoose.jpg) no-repeat left top;
    background-size:100%;
    }
    </style>
    </head>
    <body>
    <div style="margin:200px">
    <big style="color:white"><h1 align="center"><?php echo $name=$rows[0]['name'] ?></h1></big>
        <table background="image/名片.jpg"width="400px" height="100px" border="0"bgcolor="FFFFFF"align="center">
        <tr><td>学生性别：</td><td><?php echo $sex ?></td></tr>
        <tr><td>身份证号：</td><td><?php echo $IDcard ?></td></tr>
        <tr><td>学生年龄：</td><td><?php echo $age ?></td></tr>
        <tr><td>所在学校：</td><td><?php echo $school ?></td></tr>
        <tr><td>所在专业：</td><td><?php echo $profession ?></td></tr>
        <tr><td>联系电话：</td><td><?php echo $tel ?></td></tr>
        <tr><td>信誉积分：</td><td><?php echo $score ?></td></tr>
        <tr><td></td><td align="right"><input type="button" value="返回"onclick="location.href='SPchoose.php'"></strong></a></td><tr/>
        </table>
    </div>
    </body>
</html>

<?php
include('db.php');
include('input.php');
$input=new input();
$SIDcard=$input->post('SID');
$sql="SELECT * From shop WHERE shop.IDcard=$SIDcard";
$mysqli_result=$mysqli->query($sql);
$rows=array();//定义一个数组

while ($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[]=$row;//用数组一行一行的把拿出来的数据存入新建的数组
}
//var_dump($rows);
$SIDcard=$rows[0]['IDcard'];
$name=$rows[0]['name'];
$addr=$rows[0]['addr'];
$job=$rows[0]['job'];
$time=$rows[0]['time'];
$lawer=$rows[0]['lawer'];
$tel=$rows[0]['tel'];
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
        <tr><td>注册号：</td><td><?php echo $SIDcard ?></td></tr>
        <tr><td>商家名：</td><td><?php echo $name ?></td></tr>
        <tr><td>地 &nbsp&nbsp址：</td><td><?php echo $addr ?></td></tr>
        <tr><td>工作性质：</td><td><?php echo $job ?></td></tr>
        <tr><td>工作时间：</td><td><?php echo $time ?></td></tr>
        <tr><td>法人代表：</td><td><?php echo $lawer ?></td></tr>
        <tr><td>电话号码：</td><td><?php echo $tel ?></td></tr>
        <tr><td>信誉积分：</td><td><?php echo $score ?></td></tr>
        <tr><td></td><td align="right"><input type="button" value="返回"onclick="location.href='Schoose.php'"></strong></a></td><tr/>
        </table>
    </div>
    </body>
</html>

<?php
session_start();
$IDcard=$_SESSION['username'];//获取当前商家的注册号
//var_dump($IDcard);

include('db.php');
include('input.php');
$input=new input();/*基础信息获取*/
$sIDcard=$input->post('IDcard');//获取学生的身份证号
//var_dump($sIDcard);

$rows=array();//定义一个数组
$sql="SELECT * From charge WHERE stuIDcard=$sIDcard";
$mysqli_result=$mysqli->query($sql);
//var_dump($mysqli_result);
while ($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[]=$row;//用数组一行的把拿出来的数据存入新建的数组
}//用循环的方式取出数据
//var_dump($rows);
$shopIDcard=$rows[0]['sIDcard'];
//var_dump($shopIDcard);
if($shopIDcard==$IDcard){//两个商家好号一样
    $sql="UPdate shop SET score+=1 WHERE IDcard='$IDcard'";$row=$mysqli->query($sql);
    $sql="UPdate stdent SET score+=1 WHERE IDcard='$sIDcard'";$row=$mysqli->query($sql);
    $sql="Delete from charge WHERE sIDcard='$IDcard'";$row=$mysqli->query($sql);
    echo "恭喜您，您的信誉值已经提升了，雇佣生效";
}
else{
    $sqll="INSERT INTO charge (stuIDcard,sIDcard) VALUES ('{$sIDcard}','{$IDcard}')";
    $row=$mysqli->query($sqll);
    echo "您已成功选择，等待对方回应";
}
?>
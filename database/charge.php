<?php
session_start();
$IDcard=$_SESSION['username'];
//var_dump($IDcard);//获取当前学生的身份证

include('db.php');
include('input.php');
$input=new input();/*基础信息获取*/
$sIDcard=$input->post('SID');//获取商家的注册号
//var_dump($sIDcard);

$rows=array();//定义一个数组
$sql="SELECT * From charge WHERE sIDcard=$sIDcard";
$mysqli_result=$mysqli->query($sql);
//var_dump($mysqli_result);
while ($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)) {
    $rows[]=$row;//用数组一行的把拿出来的数据存入新建的数组
}//用循环的方式取出数据
//var_dump($rows);
$stuIDcard=$rows[0]['stuIDcard'];
//var_dump($stuIDcard);

if($stuIDcard==$IDcard){//两个学生身份证一样
    $sql="UPdate shop SET score+=1 WHERE IDcard='$sIDcard'";$row=$mysqli->query($sql);
    $sql="UPdate stdent SET score+=1 WHERE IDcard='$stuIDcard'";$row=$mysqli->query($sql);
    $sql="Delete from charge WHERE sIDcard='$sIDcard'";$row=$mysqli->query($sql);
    echo "恭喜您，您的信誉值已经提升了。";
}
else{
    $sqll="INSERT INTO charge (stuIDcard,sIDcard) VALUES ('{$IDcard}','{$sIDcard}')";
    $row=$mysqli->query($sqll);
    echo "您已成功选择";
}
?>
<?php
include('input.php');//获取数据的函数
include('db.php');
session_start();
$pIDcard=$_SESSION['username'];//获取学生的身份证

$input=new input();
/*基础信息获取*/
$postidcard=$input->post('postidcard');
$IDcard=$pIDcard;
$employername=$input->post('employername');
$salary=$input->post('salary');
$employtime=$input->post('employtime');
$worktime=$input->post('worktime');

var_dump($salary);
var_dump($worktime);
/*操作数据库*/
$sql="INSERT INTO employ (postidcard,IDcard,employername,salary,employtime,worktime) VALUES ('{$postidcard}','{$IDcard}','{$employername}','{$salary}','{$employtime}','{$worktime}')";
var_dump($sql);
$row=$mysqli->query($sql);//mysql插入语句执行
var_dump($row);
if($row){header("Location:Schoose.php");}
else {
    echo "插入失败";
}//判断是否插入成功，成功的话就跳转到登录界面。

?>

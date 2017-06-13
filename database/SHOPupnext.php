<?php
include('input.php');//获取数据的函数
include('db.php');
session_start();
$IDcard=$_SESSION['username'];//获取商家注册码

$input=new input();
/*基础信息获取*/
$ptn=$input->post('ptn');
$salary=$input->post('salary');
$addr=$input->post('addr');
$SIDcard=$IDcard;
$pt=$input->post('pt');
$workrequest=$input->post('workrequest');
$peoplen=$input->post('peoplen');
$worktime=$input->post('worktime');

//var_dump($salary);
//var_dump($worktime);
/*操作数据库*/
$sql="INSERT INTO post (ptn,pt,addr,worktime,salary,peoplen,workrequest,SIDcard) VALUES ('{$ptn}','{$pt}','{$addr}','{$worktime}','{$salary}','{$peoplen}','{$workrequest}','{$SIDcard}')";
//var_dump($sql);
$row=$mysqli->query($sql);//mysql插入语句执行
//var_dump($row);
if($row){header("Location:SPchoose.php");}
else {
    echo "插入失败";
}//判断是否插入成功，成功的话就跳转到登录界面。

?>

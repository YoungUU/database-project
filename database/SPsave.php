<?php
include('input.php');//获取数据的函数
include('db.php');
var_dump('mysqli_connect_error()');
$input=new input();

$IDcard=$name=$addr=$job=$time=$lawer=$tel=NULL;//赋初值
/*基础信息获取*/
$IDcard=$input->post('IDcard');
$name=$input->post('name');
$addr=$input->post('addr');
$job=$input->post('job');
$time=$input->post('time');
$lawer=$input->post('lawer');
$tel=$input->post('tel');

var_dump($IDcard);
var_dump($name);
var_dump($addr);
var_dump($job);
var_dump($time);
var_dump($lawer);
var_dump($tel);
 if($name==''or $IDcard==''or $lawer==''or $tel==''){//重要信息不能为空
    echo "商家名称，企业代码，法人代表,联系电话这四个重要信息不能为空";
    exit;
 }
$score=100;
if($addr!==''){$score+=10;}
if($job!==''){$score+=10;}//计算初始积分
if($time!==''){$score+=10;}


/*操作数据库*/
$sql="INSERT INTO shop (IDcard,name,addr,job,time,lawer,tel,score) VALUES ('{$IDcard}','{$name}','{$addr}','{$job}','{$time}','{$lawer}','{$tel}','{$score}')";
var_dump($sql);
$row=$mysqli->query($sql);//mysql插入语句执行
var_dump($row);
if($row){header("Location:login.php");}
else {
    echo "插入失败";
}//判断是否插入成功，成功的话就跳转到登录界面。

?>
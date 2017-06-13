<?php
include('input.php');//获取数据的函数
include('db.php');
var_dump('mysqli_connect_error()');
$input=new input();

$IDcard=$name=$age=$school=$prefession=$tel=$sex=NULL;//赋初值
/*基础信息获取*/
$IDcard=$input->post('IDcard');
$name=$input->post('name');
$age=$input->post('age');
$school=$input->post('school');
$prefession=$input->post('prefession');
$tel=$input->post('tel');
$sex=$input->post('sex');
var_dump($IDcard);
var_dump($sex);
 if($name==''or $school==''or $tel==''or $IDcard==''){//重要信息不能为空
    echo "姓名，电话，学校，身份证号码这四个重要信息不能为空";
    exit;
 }
$score=100;//计算积分
if($age!==''){$score+=10;}
if($prefession!==''){$score+=10;}
if($sex!==''){$score+=10;}
/*操作数据库*/

$sql="INSERT INTO student (IDcard,name,age,school,profession,tel,sex,score) VALUES ('{$IDcard}','{$name}','{$age}','{$school}','{$prefession}','{$tel}','{$sex}','{$score}')";
var_dump($sql);
$row=$mysqli->query($sql);//mysql插入语句执行
var_dump($row);
if($row){header("Location:login.php");}
else {
    echo "插入失败";
}//判断是否插入成功，成功的话就跳转到登录界面。

?>
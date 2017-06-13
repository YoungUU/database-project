<?php
include('input.php');
$input=new input();
include('db.php');

$postidcard=$input->post('PI');//获取用户名
var_dump($postidcard);

$sql="DELETE from employ WHERE postidcard='$postidcard'";
$row=$mysqli->query($sql);//执行删除语句
if($row==true){
    header("Location:SDELETE.php");
}else{
 echo "删除失败";
 }
?>
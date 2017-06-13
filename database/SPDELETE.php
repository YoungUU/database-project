<?php
include('input.php');
$input=new input();
include('db.php');

$postidcard=$input->post('ptn');//获取用户名
var_dump($postidcard);

$sql="DELETE from post WHERE ptn='$postidcard'";
$row=$mysqli->query($sql);//执行删除语句
if($row==true){
    header("Location:SPDELETE.php");
}else{
 echo "删除失败";
 }
?>
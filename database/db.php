<?php
/*$mysqli = new mysqli('localhost', 'root', '', 'mysql');
if($mysqli->connect_errno>0)
{
    echo "连接错误";
    echo $mysqli->connect_error;
    exit;
}
$sql="INSERT INTO msg (username,indate,msg) VALUES ('nc','ad','941')";
$mysqli->query($sql);
$row=$mysqli->query ($sql);
var_dump($row);
*/
$mysqli = new mysqli('localhost', 'root', '', 'ysc');//连接数据库
$mysqli->set_charset("utf8");
?>
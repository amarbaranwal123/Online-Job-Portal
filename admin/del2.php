<?php


$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("job_mail");
$query="delete from apply where id=$id";
mysql_query($query);
header("location:apply.php");
?>
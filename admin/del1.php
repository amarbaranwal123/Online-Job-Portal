<?php


$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("job_mail");
$query="delete from seek_reg where id=$id";
mysql_query($query);
header("location:delete1.php");
?>
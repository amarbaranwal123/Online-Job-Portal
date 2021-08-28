<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from updetail where id=$id";
mysql_query($query);
header("location:del1.php");

?>

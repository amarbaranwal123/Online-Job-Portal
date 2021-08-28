<?php

include("connection.php");
session_start();


$email=$_SESSION['user'];
//echo $email;
$query="select * from emp_reg where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$emp_id=$row['id'];
}
$query2="select * from seek_reg where email='$email'";
$res=mysql_query($query2);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$seek_id=$row['id'];
}
$query3="insert into apply (id,id,date,status) values('$emp_id','$seek_id',curdate(),'y')";
mysql_query($query2);

?>
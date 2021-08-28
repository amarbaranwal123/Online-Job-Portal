<?php
include("connection.php");
session_start();

$ques=$_POST['ques'];
//"echo $ques;
$email=$_SESSION['user'];
//echo $email;
$query="select * from emp_reg where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$emp_id=$row['id'];
}
$query2="insert into ques (question,id,date_time) values('$ques','$emp_id',now())";
mysql_query($query2);
header("location:discuss.php");
?>
<?php
session_start();
mysql_connect('localhost','root','')or die("connectivity error!!!");
mysql_select_db("job_mail") or die("selection error");

$ans=$_POST['ans'];
//echo $ans;
$ques_id=$_POST['ques_id'];
//echo $ques_id;
$email=$_SESSION['user'];
//echo $email;
$query="select * from emp_reg where email='$email'";
//echo $query;
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$emp_id=$row['id'];
//echo $emp_id;
}
$query2="insert into ans(ques_id,answer,id,date_time) values('$ques_id','$ans','$emp_id',now())";
mysql_query($query2); 
header("location:discuss.php");
?>
<?php
session_start();

include ("connection.php");

   $id=$_REQUEST['jobupload_id'];
   //echo $id;

 $email=$_SESSION['user'];

$query="select * from seek_reg where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$seek_id=$row['id'];
}
 $query2="insert into apply(emp_id,seeker_id,date,status) values('$emp_id','$seek_id',curdate(),'y')";
mysql_query($query2);
header("location:applyjob.php");

?>
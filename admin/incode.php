<?php
session_start();
$user=$_POST['user'];
$admin_email=$_POST['admin_email'];
//echo $admin_email;

$admin_password=$_POST['admin_password'];
//echo $admin_password;




mysql_connect('localhost','root','');
mysql_select_db("job_mail");
  

$query="select * from tbl_admin where admin_email='$admin_email' and admin_password='$admin_password'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$_SESSION['admin']=$admin_email;
	header("location:profile1.php");
}
else
{
header("location:index.php?msg=1");
}
?>
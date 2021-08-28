<?php
session_start();
$user=$_POST['user'];
//echo $user;
$email=$_POST['email'];
//echo $email;

$password=$_POST['password'];
//echo $password;

if($user=="")
{
	header("location:login.php?msg=1");
}
elseif($user=="seeker")
{
include("connection.php");
 $query="select * from seek_reg where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$_SESSION['user']=$email;
header("location:seek_profile.php");
}
}
else if($user=="employer")
{	
include("connection.php");
 $query="select * from emp_reg where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$_SESSION['user']=$email;
header("location:emp_profile.php");
}
}
	
	
else
{
header("location:login.php?msg=1");
}
?>
	
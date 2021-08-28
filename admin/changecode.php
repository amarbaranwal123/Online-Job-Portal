<?php

session_start();
if($_SESSION['admin']=="")
{
	session_distroy();
	header("Location:index.php");
}
	$admin_email=$_SESSION['admin'];
include ("../connection.php");
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;

$query="select * from tbl_admin where admin_email='$admin_email'";

$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	if($row['admin_password']==$op)
	{
		if($np==$cnp)
		{
			$query2="update tbl_admin set admin_password='$np'";
			mysql_query($query2);
			header("Location:index.php");
		}
	}
}

?>
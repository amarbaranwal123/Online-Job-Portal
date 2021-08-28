<?php

session_start();
include "connection.php";
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
$sess=$_SESSION['user'];
$query="select * from seek_reg where email='$sess'";
$res=mysql_query($query);
$row=(mysql_fetch_assoc($res));
$pswd=$row['password'];
//echo $pswd;
if($pswd==$op)
{
	if($np==$op)
	{
header("location:change.php?msg=1");
	}
	else
	{
		if($np==$cnp)
		{
			$query="update emp_reg set password='$np' where email='$sess'";
			mysql_query($query);
			//echo "yippie...!!! password changed";
			session_destroy();
header("location:login.php?msg=2");
		}
		else
		{ 
			header("location:change.php?msg=2");
		}
		}
		}
else
{
	header("location:change.php?msg=3");
}
?>
	

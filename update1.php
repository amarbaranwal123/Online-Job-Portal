<?php

session_start();
$id=$_REQUEST['id'];
//echo $id;

$company=$_POST['company'];
//echo $company;

$location=$_POST['location'];
//echo $location;

$age=$_POST['age'];
//echo $age;

$qua=$_POST['qua'];
//echo $qua;

$salary=$_POST['salary'];
//echo $salary;

$cat=$_POST['cat'];
//echo $cat;

$experience=$_POST['experience'];
//echo $experience;



include ("connection.php");
 echo $query="update upjob set company='$company',location='$location',age='$age',qua='$qua',salary='$salary',category='$cat',experience='$experience' where id=$id";
 mysql_query($query);
header("location:edit.php"); 
	?>



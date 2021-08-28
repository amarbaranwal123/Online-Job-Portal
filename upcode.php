<?php
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


include "connection.php";
echo $query="insert into upjob(company,location,age,qua,salary,category,experience,date)values('$company','$location','$age','$qua','$salary','$cat','$experience',curdate())";
mysql_query($query);
header("location:view.php");
?>
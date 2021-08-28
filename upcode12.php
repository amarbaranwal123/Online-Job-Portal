<?php
include ("connection.php");
$name=$_POST['name'];
//echo $name;
$des=$_POST['des'];
//echo $des;
$age=$_POST['age'];
//echo $age;
$qua=$_POST['qua'];
//echo $qua;





$key=$_POST['key'];
//echo $key;

$cat=$_POST['cat'];
//echo $cat;

$experience=$_POST['experience'];
//echo $experience;

$name=$_FILES['file']['name'];
	//echo $name;
	$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;

$location="cv/";






 $query="insert into updetail(name,des,age,qua,key1,category,experience,file,date) values('$name','$des','$age','$qua','$key','$cat','$experience','$name',curdate())";
 mysql_query($query);
move_uploaded_file($tmp_name,$location.$name);
header("location:seek_profile.php");





?>
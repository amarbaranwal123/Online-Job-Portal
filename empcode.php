<?php
$company=$_POST['company'];
//echo $company;

$employee=$_POST['employee'];
//echo $employee;

$address=$_POST['address'];
//echo $address;



	$name=$_FILES['file']['name'];
	//echo $name;
	$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;

$location="attach/";
 $buisness=$_POST['buisness'];
 //echo $buisness;
  $rname=$_POST['rname'];
  //echo $rname;
  
  $mobile=$_POST['mobile'];
  //echo $mobile;
  
  $email=$_POST['email'];
 // echo $email;
  
  $password=$_POST['password'];
  //echo $password;
  
  
  
  $pin=$_POST['pin'];
  //echo $pin;
  
include("connection.php");
echo $query="insert into emp_reg(company,employee,address,file,buisness,rname,mobile,email,password,pin,date) values('$company','$employee','$address','$name','$buisness','$rname','$mobile','$email','$password','$pin',curdate())";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$name);
header("location:displ.php");

?>
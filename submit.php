<?php
$name=$_POST['name'];
//echo $name;

$fname=$_POST['fname'];
//echo $fname;

$gender=$_POST['gender'];
//echo $gender;

$email=$_POST['email'];
//echo $email;

$password=$_POST['password'];
echo $password;

$pin=$_POST['pin'];
//echo $pin;

$dob=$_POST['dob'];
//echo $dob;

$qua=$_POST['qua'];
//echo $qua;

$address=$_POST['address'];
//echo $address;

$city=$_POST['city'];
//echo $city;


$exp=$_POST['exp'];
//echo $exp;


include("connection.php");
$query="insert into seek_reg(name,fname,gender,email,password,pin,dob,qua,address,city,exp,date) values('$name','$fname','$gender','$email','$password','$pin','$dob','$qua','$address','$city','$exp',curdate())";
mysql_query($query);
header("location:display.php");
?>
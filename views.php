<?php
session_start();
include "connection.php";
$ques_id=$_REQUEST['id'];
$query="select * from ans where ques_id='$ques_id'";

?>
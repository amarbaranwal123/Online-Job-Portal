<?php
session_start();
$_SESSION['user'];
$m=$_SESSION['user'];
if($_SESSION['user']=="")
{	
	session_destroy();
	header("location:login.php?msg=3");
}
include("connection.php");
$query="select * from emp_reg where email='$m'";
//echo $query;
$res=mysql_query($query);
?>

<html>

<link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" href="css1/font-awesome.min.css">
<head>
</head>
<body>
    <div id="outer">
	    <div id="header">
		    <div class="logo"><a href="#">job @ <span>mail</span></a>
			</div>
			<div id="left">			<?php
			if($row=mysql_fetch_assoc($res))
	 { ?>
	<p style="font-size:20px; font-color:black"> HELLO..WELCOME..<?php echo "$row[rname]"; ?></p>
	<?php } 
?>
</div>
<
		</div>
		
		<a class="mobile" href="#">MENU</a>
		
		      <div class="sidebar">
			  
			  
			  
			  
			  
			  <div id="icon">
			  
			  
			  
			 <?php
	mysql_connect('localhost','root','');
mysql_select_db("job_mail");
$query="select * from emp_reg where email='$m'";
$result=mysql_query($query);
	
	
	
			
			if($row=mysql_fetch_array($result,MYSQL_BOTH))
			{
			?>
			  <img src="attach/<?php echo $row['file'];?>" width="100px" height="100px">
			  
			  <?php
				
			}?> 
			  
			  
			  </div>
		
			  
			  
			  
			  
			    <ul id="nav">
				     <li><a class="selected" href="#"><i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;DASHBOARD</a></li>
					 <li><a href="upload.php"><i class="fa fa-upload" aria-hidden="true">&nbsp;</i>UPLOAD JOB</a></li>
					 <li><a href="view.php"><i class="fa fa-eye" aria-hidden="true">&nbsp;</i>VIEW JOB</a></li>
					 <li><a href="edit.php"><i class="fa fa-pencil-square" aria-hidden="true">&nbsp;</i>EDIT JOB</a></li>
					 <li><a href="view.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;LOG OUT</a></li>
					 <li><a href="change.php"><i class="fa fa-key" aria-hidden="true">&nbsp;</i>CHANGE PASSWORD</a></li>
					 <li><a href="discuss.php"><i class="fa fa-envelope" aria-hidden="true">&nbsp;</i>DISCUSSION BOARD</a></li>
				</ul>
			  </div>
			  <div class="content">
			  <h1 style="margin-left:50px"><i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>&nbsp;DASHBOARD</h1>
			  <p style="font-size:20px; font-color:black; margin-left:50px;">Here you can do stuffz...</p>
			  
			  <div id="box">
			       <div class="box-top"><p style="font-size:20px; color:white; text-align:center;">new approach to RECRUITING</div>
				   <div class="box-panel">please add the latest job, vacancies through this panel....</div>
			  </div>
			  
			  <div id="mid">
			     <div id="mid1">
				      <div class="in"><a href="upload.php"><i class="fa fa-upload fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">UPLOAD JOB</p></a>
					  </div>
					   <div class="in"><a href="view.php"><i class="fa fa-eye fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">VIEW JOB</p></a>
					  </div>
					   <div class="in"><a href="edit.php"><i class="fa fa-pencil-square fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">EDIT JOB</p></a>
					  </div>
					   <div class="in"><a href="del.php"><i class="fa fa-sign-out fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">DELETE JOB</p></a>
					  </div>
					  <div class="in">
					  </div>
					   <div class="in"><a href="logout.php"><i class="fa fa-key fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">LOGOUT</p></a>
					  </div>
					   <div class="in"><a href="discuss.php"><i class="fa fa-envelope fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">DISCUSSION BOARD</p></a>
					  </div>
					   <div class="in">
					  </div>
					  <div id="in1"><a href="change.php"><i class="fa fa-unlock-alt fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">CHANGE PASSWORD</p></a>
					  </div>
			  
			  </div>
			  
			  </div>
		
		
	</div>
	</div>
</body>
</html>
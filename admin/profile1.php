<?php
include ("../connection.php");

?>

<html>

<link rel="stylesheet" type="text/css" href="css/prstyle.css">
<link rel="stylesheet" href="css1/font-awesome.min.css">
<head>
</head>
<body>
    <div id="outer">
	    <div id="header">
		    <div class="logo"><a href="#">job @ <span>mail</span></a>
			</div>
			
		</div>
		
		<a class="mobile" href="#">MENU</a>
		
		      <div class="sidebar">
			  
			  <div id="icon"><img src="image/adi.jpg"/>
			  </div>
			    <ul id="nav">
				     <li><a class="selected" href="profile1.php"><i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;DASHBOARD</a></li>
					 <li><a href="user.php"><i class="fa fa-users" aria-hidden="true">&nbsp;</i>view USER</a></li>
					 <li><a href="seeker.php"><i class="fa fa-user-circle" aria-hidden="true">&nbsp;</i>VIEW EMPLOYER</a></li>
					 <li><a href="delete.php"><i class="fa fa-trash-o" aria-hidden="true">&nbsp;</i>DELETE EMPLOYER</a></li>
					 <li><a href="delete1.php"><i class="fa fa-envelope" aria-hidden="true">&nbsp;</i>DELETE JOBSEEKER</a></li>
					 <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;LOG OUT</a></li>
					 <li><a href="change.php"><i class="fa fa-key" aria-hidden="true">&nbsp;</i>CHANGE PASSWORD</a></li>
					 <li><a href="upjob.php"><i class="fa fa-users" aria-hidden="true">&nbsp;</i>VIEW UPLOADED JOB</a></li>
					 <li><a href="apply.php"><i class="fa fa-users" aria-hidden="true">&nbsp;</i>VIEW APPLY JOB</a></li>
					 
				</ul>
			  </div>
			  <div class="content">
			  <h1 style="margin-left:50px"><i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>&nbsp;DASHBOARD</h1>
			  <p style="font-size:20px; font-color:black; margin-left:50px;">Here you can do stuffz...</p>
			  
			  <div id="box">
			       <div class="box-top"><p style="font-size:20px; color:white; text-align:center;">MANAGE ALL THE INFORMATION</div>
				   <div class="box-panel">use your rights...</div>
			  </div>
			  
			  <div id="mid">
			     <div id="mid1">
				      <div class="in"><a href="user.php"><i class="fa fa-user fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">VIEW USER</p></a>
					  </div>
					   <div class="in"><a href="seeker.php"><i class="fa fa-eye fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">VIEW EMPLOYER</p></a>
					  </div>
					   <div class="in"><a href="delete.php"><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">DELETE EMPLOYER</p></a>
					  </div>
					   <div class="in"><a href="delete1.php"><i class="fa fa-sign-out fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">DELETE JOBSEEKER</p></a>
					  </div>
					  <div class="in"><a href="upjob.php"><i class="fa fa-eye fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">VIEW UPLOADED JOB</p></a>
					  </div>
					   <div class="in"><a href="logout.php"><i class="fa fa-key fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">LOGOUT</p></a>
					  </div>
					   <div class="in"><a href="apply.php"><i class="fa fa-eye fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">VIEW APPLY JOB</p></a>
					  </div>
					   <div class="in">
					  </div>
					  <div id="in1"><a href="change.php"><i class="fa fa-unlock-alt fa-3x" aria-hidden="true"></i><br/><p style="margin-left:40px; font-size:20px;">CHANGE PASSWORD</p></a>
					  </div>
			  
			  </div>
			  
			  </div>
		
		
	</div>
</body>
</html>
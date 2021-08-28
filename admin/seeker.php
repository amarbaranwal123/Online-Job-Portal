<?php

include ("../connection.php");
?>

<html>


<link rel="stylesheet" type="text/css" href="css/us1.css">
<link rel="stylesheet" href="css1/font-awesome.min.css">
<head>
</head>
<body>
    <div id="outer">
	    <div id="header">
		    <div class="logo"><a href="#">job @ <span>mail</span></a>
			</div>
			
			
			
			<div id="left">			
			
</div>


		</div>
		
		<a class="mobile" href="#">MENU</a>
		
		      <div class="sidebar">
			  
			  
			  
			  
			  
			  <div id="icon"><img src="image/adi.jpg"/>
			  
			  
			  
			 
			  
			  
			  </div>
		
			  
			  
			  
			  
			    <ul id="nav">
				     <li><a class="selected" href="#"><i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;DASHBOARD</a></li>
					 <li><a href="user.php"><i class="fa fa-users" aria-hidden="true">&nbsp;</i>view USER</a></li>
					 <li><a href="seeker.php"><i class="fa fa-user-circle" aria-hidden="true">&nbsp;</i>VIEW EMPLOYER</a></li>
					 <li><a href="delete.php"><i class="fa fa-trash-o" aria-hidden="true">&nbsp;</i>DELETE USER</a></li>
					 <li><a href="delete1.php"><i class="fa fa-envelope" aria-hidden="true">&nbsp;</i>DELETE JOBSEEKER</a></li>
					 <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;LOG OUT</a></li>
					 <li><a href="#"><i class="fa fa-key" aria-hidden="true">&nbsp;</i>CHANGE PASSWORD</a></li>
					 
				</ul>
			  </div>
			  <div id="tbl">
			      <div id="tbl1">
				  
				     <table border="1px">
					            <tr><td colspan="12" style="padding:10px;"><h1>DISPLAYING ALL EMPLOYER</h1></td></tr>
								
								
								<tr>
								<th>COMPANY</th>
								<th>EMPLOYEE</th>
								<th>ADDRESS</th>
								<th>FILE</th>
								<th>BUISNESS</th>
								<th>NAME</th>
								<th>MOBILE</th>
								<th>EMAIL</th>
								<th>PASSWORD</th>
								<th>PIN</th>
								
								<th>DATE</th>
								
								</tr>
								
								<?php
								$query="select * from emp_reg ";
								//echo $query;
								$result=mysql_query($query);
								$a=1;
							while($row=mysql_fetch_array($result,MYSQL_BOTH))
							{
								?>
									
									<td><?php echo $row['company'] ?></td>
									<td><?php echo $row['employee'] ?></td>
									
									<td><?php echo $row['address'] ?></td>
									<td><?php echo $row['file'] ?></td>
									<td><?php echo $row['buisness'] ?></td>
									<td><?php echo $row['rname'] ?></td>
									<td><?php echo $row['mobile'] ?></td>
									
									<td><?php echo $row['email'] ?></td>
									<td><?php echo $row['password'] ?></td>
									<td><?php echo $row['pin'] ?></td>
								
									<td><?php echo $row['date'] ?></td>
									
									</tr>
									<?php
									$a++;
							}
							?>
					 </table>
				  
				  </div>
			  </div>
</div>
</body>
</html>

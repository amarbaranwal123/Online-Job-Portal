
<?php
session_start();
$_SESSION['user'];
$m=$_SESSION['user'];
if($_SESSION['user']=="")
{	
	session_destroy();
	header("location:login.php?msg=3");
}



?>

<html>


<link rel="stylesheet" type="text/css" href="css/del.css">
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
			  
			  
			  
			  
			  
			  <div id="icon">
			  
			  
			  
			 <?php
	mysql_connect('localhost','root','');
mysql_select_db("job_mail");
$query1="select * from emp_reg where email='$m'";
$result1=mysql_query($query1);
	
	
	
			
			if($row1=mysql_fetch_array($result1,MYSQL_BOTH))
			{
			?>
			     <img src="attach/<?php echo $row1['file'];?>" width="100px" height="100px">
			  
			  <?php
				
			}?> 
			  
			  
			  </div>
		
			  
			  
			  
			  
			    <ul id="nav">
				     <li><a class="selected" href="#"><i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;DASHBOARD</a></li>
					 <li><a href="upload.php"><i class="fa fa-upload" aria-hidden="true">&nbsp;</i>UPLOAD JOB</a></li>
					 <li><a href="view.php"><i class="fa fa-eye" aria-hidden="true">&nbsp;</i>VIEW JOB</a></li>
					 <li><a href="view.php"><i class="fa fa-pencil-square" aria-hidden="true">&nbsp;</i>EDIT JOB</a></li>
					 <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;LOG OUT</a></li>
					 <li><a href="#"><i class="fa fa-key" aria-hidden="true">&nbsp;</i>CHANGE PASSWORD</a></li>
					 <li><a href="#"><i class="fa fa-envelope" aria-hidden="true">&nbsp;</i>CONTACT US</a></li>
				</ul>
			  </div>
			  <div id="tbl">
			      <div id="tbl1">
				  
				     <table border="1px">
					            <tr><td colspan="10" style="padding:10px;"><h1>DISPLAYING ALL YOUR UPLOADED JOB</h1></td></tr>
								
								
								<tr>
								<th>COMPANY</th>
								<th>LOCATION</th>
								<th>AGE</th>
								<th>QUALIFICATION</th>
								<th>SALARY</th>
								<th>CATEGORY</th>
								<th>EXPERIENCE</th>
								<th>DATE</th>
								<th>EDIT</th>
								<th>DELETE</th>
								</tr>
								
								<?php
								$query="select * from upjob ";
								//echo $query;
								$result=mysql_query($query);
								$a=1;
							while($row=mysql_fetch_array($result,MYSQL_BOTH))
							{
								?>
									<tr><?php //echo $a; ?></td>
									<td><?php echo $row['company'] ?></td>
									<td><?php echo $row['location'] ?></td>
									
									<td><?php echo $row['age'] ?></td>
									<td><?php echo $row['qua'] ?></td>
									<td><?php echo $row['salary'] ?></td>
									<td><?php echo $row['category'] ?></td>
									<td><?php echo $row['experience'] ?></td>
									
									<td><?php echo $row['date'] ?></td>
									<td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
							<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
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


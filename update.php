<?php
$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("job_mail");
$query="select * from upjob where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<link rel="stylesheet" href="css/up.css">
</head>
<body>
<div id="outer">
   
              <div id="header">
			   
			   <ul>
			   <h1 style="margin-left:30px">job @ mail</h1>
			   <li><a href="logout.php">LOG OUT..</a></li><li><a href="seeker.php">seeker register..</a></li><li><a href="emp.php">emp register..</a></li>
			   
			        <li><a href="#">services</a></li>
					 <li><a href="#">contact us</a></li>
					  <li><a href="#">about us</a></li>
					   <li><a href="#">search</a></li>
					    <li><a href="#">jobs</a></li>
						 <li><a href="job.php">home</a></li>
			   </ul>
			   </div>
			   <div id="mid">
			   </div>
			    <div id="mid1">
			   </table align="center">
			   <form action="update1.php" method="post"  enctype="multipart/form-data">
			   
			   <input type="hidden" name="id" value="<?php echo $id ?>"/><br>
			   
	                         <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>COMPANY:</th>
                             <tr><br/><td><input type="text" name="company" placeholder="please enter cname" style="height:35px; width:200px;" value="<?php echo $row['company']?>"//></td></tr></p>
							 
							 
							 
							<p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>LOCATION:</th>
                             <tr><br/><td><input type="text" name="location" placeholder="please enter location" style="height:35px; width:200px;" value="<?php echo $row['location']?>"//></td></tr></p>
							 
							 
							 
							 
							
											   
											   
											
							 
							     <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>AGE:</th>
                             <tr><br/><td><input type="text" name="age" placeholder="please enter your age" style="height:35px; width:200px;" value="<?php echo $row['age']?>"//></td></tr></p>  
							 
							 
							 
							 
							<p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;">  <th>QUALIFICATION:</th>
                             <tr><br/><td><textarea name="qua" placeholder="please enter your qualification" style="height:35px; width:200px;"  value="<?php echo $row['qua']?>"/></textarea></td></tr><br/></p>
							 
							 
							 
							 
							 
							 <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>SALARY:</th>
                             <tr><br/><td><input type="number" name="salary"  style="height:35px; width:200px;" value="<?php echo $row['salary']?>"//></td></tr><br/></p> 
							  <tr>
						  
							  
							  
							  
							  
						
							 
							 
		   
		               
						 
						 <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>JOB CATEGORY:</th>
                             <tr><br/><td><select name="cat" value="<?php echo $row['cat']?>"/>
							 <option value="ps">please choose</option>
							  <option value="engg">engineering</option>
							   <option value="bm">buisness management</option>
							    <option value="hm">hotel management</option>
								
								</select></td></tr></p>
							 
							 
							 <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>EXPERIENCE:</th>
                             <tr><br/><td><input type="text" name="experience" placeholder="please enter" style="height:35px; width:200px;" value="<?php echo $row['experience']?>"//></td></tr></p>
		        
							
							
							 
							 
							 <tr><br/>
						  <td><p style="margin-left:60px; margin-top:10px;"> <input type="submit" value="submit" class="button"></td>
						  </tr>
			   <input type="hidden" name="id" value="<?php  echo $id; ?>"/>
			   </form>
			   </table>
			   </div>
			   <div id="footer">
						      <ul>
			   <h1 style="margin-left:30px">job @ mail</h1>
			   <li><a href="logout.php">LOG OUT..</a></li>
			   <li><a href="seeker.php">seeker register..</a></li>
			   <li><a href="emp.php">employer register..</a></li>
			        <li><a href="#">services</a></li>
					 <li><a href="#">contact us</a></li>
					  <li><a href="#">about us</a></li>
					   <li><a href="#">search</a></li>
					    <li><a href="#">jobs</a></li>
						 <li><a href="job.php">home</a></li>
			   </ul>
						</div>
						
						<div id="copy"><h3 color:black>Copyright 2018, my website created by<a href="aboutus.php"> Aditya Kumar yadav</a></h3>
						</div>
							 
							 

</div>
</body>
</html>

<?php
}
?>
<?php

$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from updetail where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>

<html>
<head>
<link rel="stylesheet" href="css/upstyle2.css">
</head>
<body>

<div id="outer">
   
              <div id="header">
			   
			   <ul>
			   <h1 style="margin-left:30px">job @ mail</h1>
			   <li><a href="logout.php">LOG OUT..</a></li><li><a href="seek.php">seeker register..</a></li><li><a href="emp.php">emp register..</a></li>
			   
			        <li><a href="#">services</a></li>
					 <li><a href="#">contact us</a></li>
					  <li><a href="#">about us</a></li>

					    <li><a href="#">jobs</a></li>
						 <li><a href="job.php">home</a></li>
			   </ul>
			   </div>
			   <div id="mid"><h1 style="text-align:center; font-size:40px; color:#003939;">.WELCOME</h1>
			   </div>
			    <div id="mid1">
			   </table align="center">
			   <form action="upcode12.php" method="post"  enctype="multipart/form-data">
			   
			   
			   
	                         <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>NAME:</th>
                             <tr><br/><td><input type="text" name="name" placeholder="please enter cname" style="height:35px; width:200px;" value="<?php echo $row['name']?>"//></td></tr></p>
							 
							 
							 
							<p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>DESIGNATION:</th>
                             <tr><br/><td><input type="text" name="des" placeholder="please enter location" style="height:35px; width:200px;" value="<?php echo $row['des']?>"//></td></tr></p>
							 
							 
							 
							 
							
											   
											   
											
							 
							     <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>AGE:</th>
                             <tr><br/><td><input type="number" name="age" placeholder="please enter your age" style="height:35px; width:200px;" value="<?php echo $row['age']?>"//>/></td></tr></p>  
							 
							 
							 
							 
							<p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;">  <th>QUALIFICATION:</th>
                             <tr><br/><td><textarea name="qua" placeholder="please enter your qualification" style="height:35px; width:200px;"value="<?php echo $row['qua']?>"//>></textarea></td></tr><br/></p>
							 
							 
							 
							 
							 
							 <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;" > <th>KEY SKILLS:</th>
                             <tr><br/><td><textarea name="key" value="<?php echo $row['key']?>"//></textarea></td></tr><br/></p> 
							  <tr>
						  
							  
							  
							  
							  
						
							 
							 
		   
		               
						 
						 <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>COURSE CATEGORY:</th>
                             <tr><br/><td><select name="cat" value="<?php echo $row['cat']?>"//>
							 <option value="ps">please choose</option>
							  <option value="engg">b.tech</option>
							   <option value="mba">mba</option>
							    <option value="arts">arts</option>
								
								</select></td></tr></p>
							 
							 
							 <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;"> <th>EXPERIENCE:</th>
                             <tr><br/><td><input type="text" name="experience" placeholder="please enter" style="height:35px; width:200px;" value="<?php echo $row['experience']?>"//></td></tr></p>
		        
							
							
							 <p style="font-size:30px; color:black; margin-left:60px; margin-top:10px;" > <th>UPLOAD CV:</th>
                             <tr><br/><td><input type="file" name="file" value="<?php echo $row['file']?>"></td></tr></p>   
							 
							 
							 
							 
							 <tr><br/>
						  <td><p style="margin-left:60px; margin-top:10px;"> <input type="submit" value="submit" class="button"></td>
						  </tr>
			   
			   </form>
			   </table>
			   </div>
			   <div id="footer">
						      <ul>
			   <h1 style="margin-left:30px">job @ mail</h1>
			   <li><a href="logout.php">LOG OUT..</a></li>
			   <li><a href="seek.php">seeker register..</a></li>
			   <li><a href="emp.php">employer register..</a></li>
			        <li><a href="#">services</a></li>
					 <li><a href="#">contact us</a></li>
					  <li><a href="#">about us</a></li>
					   <li><a href="#">search</a></li>
					    <li><a href="#">jobs</a></li>
						 <li><a href="job.php">home</a></li>
			   </ul>
						</div>
						
						<div id="copy"><h3 color:black>Copyright 2018, my website created by<a href="#"> Aditya kumar yadav</a></h3>
						</div>
							 
							 

</div>
</body>
</html>
<?php
}
?>
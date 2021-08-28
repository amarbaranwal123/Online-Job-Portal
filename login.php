<?php
error_reporting(0);

$msg=$_REQUEST['msg'];

?>

<html>
      <head>
	  <link rel="stylesheet" href="css/styles1.css"/>
	  </head>
	  <body>
	        <div id="outer">
			
			
			      <div id="header">
			   
			   <ul>
			   <h1 style="margin-left:30px">job @ mail</h1>
			   <li><a href="login.php">login..</a></li>
			  <li><a href="emp.php">emp register..</a></li>
			  <li> <a href="seeker.php">seeker register..</a></li>
			        <li><a href="login.php">services</a></li>
					 <li><a href="contactushere.php">contact us</a></li>
					  <li><a href="aboutus.php">about us</a></li>
					  
					    <li><a href="login.php">jobs</a></li>
						 <li><a href="index.php">home</a></li>
			   </ul>
			   </div>
			   <div id="name"><p style="font-size:80px; color:black; margin-left:60px; margin-top:150px;">welcome to......</p>
			 <a href="job.php">  <p style="font-size:80px; color:#003535; text-align:center; ">job @ mail</p></a>
			 
			 <?php if ($msg==2)
{ ?>
	<p style="text-align:center; color:red; font-size:20px;"><?php echo "logout successful"; ?></p>
<?php } ?>

			   </div>
			   <div id="log">
			         <form action="lgcode.php" method="post">
					 
					 <p style="font-size:30px; color:black; margin-left:60px; margin-top:20px;"> <th>WHO YOU ARE</th></p>
					 <tr><br/>
					 <p style="margin-left:60px"><td>
					 <select name="user">
					 <option value="">please select</option>
					 <option value="employer">employer</option>
					 <option value="seeker">job seeker</option>
					 </select></td></tr>
					 
					 
					 
					    <p style="font-size:30px; color:black; margin-left:60px; margin-top:25px;">  <th>LOGIN HERE EMAIL</th></p>
						  <tr><br/>
						  <p style="margin-left:60px"><td><input type="email" name="email"  placeholder="input your email id.."  style="height:25px; width:330px"/></td></p>
						  </tr>
						  <p style="font-size:30px; color:black; margin-left:60px; margin-top:25px;">  <th>PASSWORD</th></p>
						  <tr><br/>
						  <p style="margin-left:60px"><td><input type="password" name="password" size="55"  placeholder="please enter your password.."  style="height:25px; width:330px"/></td></p>
						  </tr>
						  <tr>
						  <td><p style="margin-left:60px; margin-top:50px;"> <input type="submit" value="submit" class="button"></td></p>
						  </tr>
						  <?php
						  if ($msg==3)
{ ?>
	<p style="text-align:center; color:red; font-size:20px;"><?php echo "please enter the information";?></p>
<?php } ?>  
<?php if ($msg==1)
{ ?>
	<p style="text-align:center; color:red; font-size:20px;"><?php echo "invalid email or password"; ?></p>
<?php } ?>

						  
					 </form><br/><br/>
					 <p style="text-align:center; font-size:20px; color:black"><a href="#">forgot password?</a><p>
			       <p style="text-align:center; font-size:20px; color:black">not a member?<a href="job.php">join now</a></p>
			   </div>
			   
			   
			   
			   
			   
			    <div id="footer">
		        <ul>
			   <h1 style="margin-left:30px">job @ mail</h1>
			   <li> <a href="login.php">login..</a></li>
			  
			  <li><a href="emp.php">emp register..</a></li>
			   <li> <a href="seeker.php">seeker register..</a></li>
			        <li><a href="login.php">services</a></li>
					 <li><a href="contactushere.php">contact us</a></li>
					  <li><a href="aboutus.php">about us</a></li>
					   <li><a href="ex.php">search</a></li>
					    <li><a href="login.php">jobs</a></li>
						 <li><a href="index.php">home</a></li>
			   </ul>
						</div>
						
						<div id="copy"><h3 color:black>Copyright 2018, my website created by<a href="#"> Aditya kumar yadav  </a></h3>
						</div>

			
			</div>
	  </body>

</html>
<?php
error_reporting(0);

$msg=$_REQUEST['msg'];

?>

<html>
      <head>
	  <link rel="stylesheet" href="css/astyles.css"/>
	  </head>
	  <body>
	        <div id="outer">
			
			
			      <div id="header">
			   
			   <ul>
			   <h1 style="margin-left:30px">job @ mail</h1>
			   
						 
			   </ul>
			   </div>
			   <div id="name"><p style="font-size:80px; color:black; margin-left:60px; margin-top:150px;">hey....welcome......</p>
			 <a href="#">  <p style="font-size:80px; color:#003535; text-align:center; ">ADMIN</p></a>
			  <?php if ($msg==2)
{ ?>
	<p style="text-align:center; color:red; font-size:20px;"><?php echo "logout successful"; ?></p>
<?php } ?>
			   </div>
			   <div id="log">
			         <form action="incode.php" method="post">
					    <p style="font-size:30px; color:black; margin-left:60px; margin-top:50px;">  <th>LOGIN HERE EMAIL</th></p>
						  <tr><br/>
						  <p style="margin-left:60px"><td><input type="email" name="admin_email" size="55" width="20" placeholder="input your email id.." style="height:30px; width:400px; color:#003939;"/></td></p>
						  </tr>
						  <p style="font-size:30px; color:black; margin-left:60px; margin-top:50px;">  <th>PASSWORD</th></p>
						  <tr><br/>
						  <p style="margin-left:60px"><td><input type="password" name="admin_password" size="55"  placeholder="please enter your password.." style="height:30px; width:400px; color:#003939;"/></td></p>
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
			       
			   </div>
			   
			   
			   
			   
			   
			    <div id="footer">
		        <ul>
			   <h1 style="margin-left:30px">job @ mail</h1>
			   
			   </ul>
						</div>
						
						<div id="copy"><h3 color:black>Copyright 2018, my website created by<a href="#"> Aditya kumar yadav</a></h3>
						</div>

			
			</div>
	  </body>

</html>
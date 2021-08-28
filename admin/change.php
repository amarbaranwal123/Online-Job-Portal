<?php

error_reporting(0);

$msg=$_REQUEST['msg'];
?>
<html>

<head>
<link rel="stylesheet" href="css/change.css"/>
</head>
<body>
    <div id="outer">
	<div id="header">
	  		    <div class="logo"><a href="#">job @ <span>mail</span></a>
			</div>
	
	</div>
	
	<div id="cn">
<table>
	  <form action="changecode.php" method="post">
	  <tr>
	  <th>   OLD PAASSWORD</th></tr>
	  <tr><td><input type="password" name="op" style="height:30px; width:300px;"/><br/></td></tr>
		
		<tr><th>NEW PASSWORD</th></tr>
		<tr><td><input type="password" name="np" style="height:30px; width:300px;"/><br/></td></tr>
		
		<tr><th>CONFIRM NEW PASSWORD</th></tr>
		<tr><td><input type="password" name="cnp" style="height:30px; width:300px; border-bottom:2px red;"/><br/></td></tr>
		<tr><td><div class="g-recaptcha" data-sitekey="6LdS7ykUAAAAAN01rr145Tu70ZqoTdDLNZatY_2n"></div></td></tr><br/>
		
		
		<tr><td><input type="submit" value="change" class="btn"/></td></tr>
	 </form>
	 </table>
	</div>
</body>
</html>
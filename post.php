<?php
$ques_id=$_REQUEST['id'];
//echo $ques_id;

?>
	<form action="answer.php" method="post">
	<input type="hidden" name="ques_id" value="<?php echo $ques_id; ?>"/>
	ANSWER
	<textarea name="ans"></textarea><br/>
	<input type="submit" value="post">
	</form>
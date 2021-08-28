<?php

?>
<form action="ques.php" method="post">
ASK SOMETHING:
    <textarea name="ques"></textarea><br/>
		<input type="submit" value="add">
</form>
<?php
include("connection.php");
$query="select * from ques";
$res=mysql_query($query);
?>
<table>
	<tr>
	    <th>s.no.</th>
		<th>question</th>
		<th>post</th>
		<th>view</th>
	</tr>
	<?php
	$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?><tr>
		<td><?php echo $row['ques_id'];?></td>
		<td><?php echo $row['question'];?></td>
		<td><a href="post.php?id=<?php echo $row['ques_id']; ?>">post</a></td>
		<td><a href="views.php?id=<?php echo $row['ques_id']; ?>"">view</a></td>
		</tr>
		<?php
		$a++;
}
?>
	</table>
<?php
$name=$_POST['name'];
echo $name;
mysql_connect('localhost','root','');
mysql_select_db("job_mail");
$query="select * from emp_reg where employee like '%$name%'";
$res=mysql_query($query);
if($res=="")
{
echo "no records found";
}
else
{

?>
<table>
<tr>
<th>name</th>
<th>email</th>
<th>password</th>
</tr>

<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $row[1] ?></td>
<td><?php echo $row[2] ?></td>
<td><?php echo $row[3] ?></td>
</tr>
<?php
}
?>
</table>
<?php
}
?>
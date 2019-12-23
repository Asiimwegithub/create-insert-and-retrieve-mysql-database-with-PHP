<?php
include 'conn.php';
$sql="SELECT *FROM skype";
$result=mysqli_query($conn,$sql);
?>
<html>
<head>
	<title>our data</title>
</head>
<body>
	<table border="1">
		<tr>
<th>first name</th>
<th>second name</th>
<th>age</th>
<th>email</th>
</tr>
		
	<?php
while($rows=mysqli_fetch_assoc($result))
{
	?>
<tr>
	<td><?php echo $rows['fname'];?></td>
<td><?php echo $rows['Sname'];?></td>
<td><?php echo $rows['Age'];?></td>
<td><?php echo $rows['email'];?></td>
</tr>
<?php
}
?>

	</table>
</body>
</html>

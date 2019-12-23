<?php
include 'conn.php';
$fname=$_POST['fname'];
$Sname=$_POST['Sname'];
$Age=$_POST['Age'];
$email=$_POST['email'];
$bill = 1000000;

$sql="INSERT INTO skype(fname, Sname, Age, email) values('$fname', '$Sname', '$Age', '$email')";
if(mysqli_query($conn,$sql))
{
	echo "New recorded inserted";
}
else{
	echo "not recorded".mysqli_error($conn);
}






?>
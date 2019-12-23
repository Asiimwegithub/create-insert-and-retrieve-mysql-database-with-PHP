<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
//check connection
if(!$conn){
	die("not connected".mysqli_connect_error());
}
echo "connected";
$sql= "CREATE DATABASE dero";
if(mysqli_query($conn,$sql))
{
	echo "Database created";
}
else
{
	echo "Not created".mysqli_error($conn);
	mysqli_close($conn);
}



?>
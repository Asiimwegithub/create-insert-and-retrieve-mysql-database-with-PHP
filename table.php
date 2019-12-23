<?php
include 'conn.php';
$sql= "CREATE TABLE skype(
fname varchar(20)not null,
 Sname varchar(30)not null,
  Age  int(40)not null,
   email varchar(30)PRIMARY KEY not null)";

if(mysqli_query($conn,$sql)){
	echo "Table created";
}
else
{
	echo "not created".mysqli_error($conn);
}














?>
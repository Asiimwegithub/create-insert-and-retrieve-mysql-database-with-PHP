<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dero";
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
	die("not connected".mysqli_connect_error());
}
echo "connected";
?>























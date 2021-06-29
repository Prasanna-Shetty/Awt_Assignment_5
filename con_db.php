<?php 
	$host='localhost';
	$uname='root';
	$pwd='';
	$db='mydatabase';

	$con=mysqli_connect($host,$uname,$pwd);
	mysqli_select_db($con,$db);



 ?>
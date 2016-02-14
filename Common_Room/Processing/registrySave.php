<?php
	ob_start();
	session_start();
	
	include 'db_constant.php';
	if (isset($_POST['first_name'])) {
		# code...
	
	$full_name=$_POST['first_name'].$_POST['last_name'];
	$roll=$_POST['roll'];
	$pass=$_POST['password'];
	$year=$_POST['year'];
	$username=$_POST['username'];
	$category=$_POST['category'];
	$mail=$_POST['mail'];}

					
 	$sql="INSERT INTO `test`.`login` (
										`id` ,
										`enabled` ,
										`mail` ,
										`username` ,
										`full_name` ,
										`roll` ,
										`year` ,
										`password` ,
										`category`
										)
										VALUES (
										NULL , '0', '$mail', '$username', '$full_name', '$roll', '$year', '$pass', '$category'
										)";
 	mysql_query($sql);
	header('Location:../login_page.php');
?>
<?php
	ob_start();
	session_start();
	
	include 'db_constant.php';
	include 'functions.php';
	$date=$_POST['date'];
	$time=$_POST['time'];
	$course_id=$_POST['course_id'];
	$syllabus=$_POST['syllabus'];
	$year=$_POST['year'];
	$teacher_name=$_POST['teacher_name'];

	if($_SESSION['category']=='CR' && $year!=$_SESSION['year'])
	{
		header('Location:../ct_schedule.php?permission=no');
		die();
	}

	$course_no=getCourse($course_id);

	$sql="INSERT INTO ct (date, time, syllabus, course_no,teacher_id) VALUES ('$date', '$time', '$syllabus','$course_no','$teacher_name')";
	
	mysql_query($sql);
	header('Location:../ct_schedule.php?ct=yes');
?>
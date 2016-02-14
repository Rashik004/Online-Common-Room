<?php
	ob_start();
	session_start();
	
	include 'db_constant.php';
	$year=$_POST['year'];
	$course_id=$_POST['course_id'];
	$ct_no=$_POST['ct_no'];
	$full_marks=$_POST['full_marks'];
	$teacher_name=$_POST['teacher_name'];
	$day=date("Y-m-d");
	$ct_id=$course_id*10+$ct_no;//so that every course id is unique
	$sqlResult="INSERT INTO published_result (ct_id, year, course_id, full_marks, ct_no, teacher_name, published) VALUES ('$ct_id', '$year', '$course_id', '$full_marks', '$ct_no', '$teacher_name', '$day')";
	mysql_query($sqlResult);
	$sql="SELECT * FROM student_info WHERE year='$year' ORDER BY roll";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result)) 
	{
		$temp_roll=$row['roll'];
		$temp_marks=$_POST[$temp_roll];
		echo $temp_marks."\n";
		$sql="INSERT INTO ct_marks (roll,ct_id,marks) VALUES ('$temp_roll','$ct_id','$temp_marks')";
		mysql_query($sql);	
		header('Location:../result_board.php?ok=yes');
	}
?>
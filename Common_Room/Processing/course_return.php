<?php
	include ("db_constant.php");
	$year=$_GET['q'];
	$sql="SELECT * FROM course WHERE year='$year'";
	$result=mysql_query($sql);
	$ht="";
	while ($row=mysql_fetch_array($result)) 
	{
		/*echo $row['course_id'];
		die();*/
		$ht=$ht.'<option value="'.$row['course_id'].'">'.$row['course_title'].' - '.$row['course_no'].'</option>';	# code...

	}
	echo $ht;
?>
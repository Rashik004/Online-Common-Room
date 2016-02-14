<?php
	include 'db_constant.php';
	$id=$_GET['id'];
	if(!isset($_GET['ct']))
	{
		
		$fileDelete="SELECT * FROM slides WHERE $id='id'";
		$result=mysql_query($fileDelete);
		while ($row=mysql_fetch_array($result)) 
		{
			delete($row['directory']);
		}
		$sql="DELETE FROM slides WHERE id='$id'";
		mysql_query($sql);
		header('Location:../class_lecture.php');
		die();
	}
	else
	{
		$sql="DELETE FROM ct WHERE ct_id='$id'";
		mysql_query($sql);
		header('Location:../ct_schedule.php');
		die();
	}
		
	
?>
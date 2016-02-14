<?php
	
	/*echo "$con";*/
		function getCourse($id)
	{
		
			$sql_course="SELECT * FROM course WHERE course_id='$id'";
				$result=mysql_query($sql_course);
				$course_id=0;
				while ($row=mysql_fetch_array($result))
				{
					return $row['course_no']; 	
				}
				return "0";
	}

	function getCourseNo($id)
	{
		
			$sql_course="SELECT * FROM course WHERE course_id='$id'";
				$result=mysql_query($sql_course);
				$course_id=0;
				while ($row=mysql_fetch_array($result))
				{
					return $row['course_title']; 	
				}
				return "undefined Course";
	}

	function getFullNameByRoll($roll)
	{
		$sql="SELECT * FROM student_info WHERE roll='$roll'";
		$result=mysql_query($sql);
		while ($row=mysql_fetch_array($result))
		{
			return $row['full_name']; 	
		}
	}
	
	
	function permissionOnlyTeacher()//returns true if permission is granted
	{
		if($_SESSION['category']=='teacher' || $_SESSION['category']=='admin')
			{
			
				return true;
			}

		else
			{
			
				return false;
			}
	}

	function permissionNotStudent()//returns true if permission is granted
	{
		if($_SESSION['category']=='student')
			return false;
		else
			return true;
	}

	function permissionCheck()
	{
		if(isset($_GET['permission']) &&  $_GET['permission']=='no')
			echo '<p style="color:red">permission denied</p>';
	}

	function addDeleteButton()
	{
		echo '<img src="images/deleteButton.jpg">'; 
	}

	function checkCookie()
	{
		
	}
?>
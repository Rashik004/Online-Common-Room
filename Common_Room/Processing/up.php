<?php
	$con=mysql_connect("localhost", "root", "");
	mysql_select_db('test', $con);
	/*echo "$con";*/
	function getCourseNo($id)
	{
		/*$sql="SELECT * FROM course ORDER BY id DESC LIMIT 0,3";
		$result=mysql_query($sql);
		while ($row=mysql_fetch_array($result)) {
			return $row['course_title'];
		}*/
			$sql_course="SELECT * FROM course WHERE course_id='$id'";
				$result=mysql_query($sql_course);
				$course_id=0;
				while ($row=mysql_fetch_array($result))
				{
					return $row['course_title']; 	
				}
	}
	echo getCourseNo(2);
?>
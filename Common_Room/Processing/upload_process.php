<?php
	ob_start();
	session_start();
	
	include 'db_constant.php';
	include 'functions.php';
		if($_FILES['slide']['error']>0)
		{
			echo "error<\br>";
			header('Location:../upload_form.php?error=yes');
			die();
		}
		else
			{
				
				$title=$_POST['title'];
				$course_id=$_POST['course_id'];
				$teacher_id=$_SESSION['id'];
				$year= $_POST['year'];

				$prefix=$_SESSION['id'].time();
				$link="upload/".$prefix.$_FILES['slide']['name'];
				if(($_FILES['slide']['size'] / (1024*1024))<=5) #for size check
					move_uploaded_file($_FILES['slide']['tmp_name'], $link);

				$image_link="http://localhost/common_Room/processing/".$link;#full link of image



				

				//now we insert the directory into database
				$sql="INSERT INTO slides (course_id,title,teacher_id,year,directory) VALUES ('$course_id','$title','$teacher_id','$year','$image_link')";
				mysql_query($sql);
				header('Location:../upload_form.php?upload=yes');
			}
?>
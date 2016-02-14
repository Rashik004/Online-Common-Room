<?php
	include 'processing/header.php';	
	include 'processing/db_constant.php';

	if(!permissionOnlyTeacher())
	{?>
		<h2 align='center'><?php echo "You aren't allowed to see this page"; ?></h2>
		
		<?php die();
	}

	$year=$_POST['year'];
	$course_id=$_POST['course_id'];
	
	$sql="SELECT * FROM student_info WHERE year='$year' ORDER BY roll";
	$result=mysql_query($sql);
?>

	<div id="body">
		<div class="content">
			<form name="ct_form" enctype="multipart/form-data" method="post"  action="processing/marks_submit_process.php" onsubmit="return validateCt()">
				<input type="hidden" name="year" value="<?php echo $year;?>">
				<input type="hidden" name="course_id" value="<?php echo $course_id;?>">
				<p>
					<table>
					<tr>

						<td >
							Course Teacher
						</td>
						<td style="padding:15px;">
							<input type="text" name="teacher_name"/>
						</td>
						<td style="padding:15px;">
							class Test No
						</td>
						<td style="padding:15px;">
							<select name="ct_no" id='ct_no'>
								<option value="0"></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</td>
						<td style="padding:15px;">
							full marks
						</td>
						<td>
							<input type="text" name="full_marks"/>
						</td>
					</tr>
				</table>
				</p>
				<table>
				 	<tr>
				 		<td style="padding:15px;">
				 			Roll
				 		</td>
				 		<td style="padding:15px;">
				 			Name
				 		</td>
				 		<td style="padding:15px;">
				 			Marks
				 		</td>
				 	</tr>
				 	<?php

				 	
				 		while ( $row=mysql_fetch_array($result)) { $roll=$row?>
				 		<tr>
				 			<td style="padding:15px;"><?php echo $row['roll'];?> </td>
				 			<td style="padding:15px;"> <?php echo $row['full_name']; ?></td>
				 			<td style="padding:15px;"><input type="text" name= "<?php echo $row['roll'] ;?>" /></td>
				 		</tr>
				 			
				 	<?php
				 	}
				 	?>
				 </table>
				 <table>
				 	<tr>
				 		<input type="submit" value="submit marks"/>
				 	</tr>
				 </table>
			</form>
		</div>

	</div>


<?php
include 'processing/footer.php';
?>
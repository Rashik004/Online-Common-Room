<?php
	include ("processing/header.php");
	$ct_id=$_GET['ct_id'];
	$sql="SELECT * FROM published_result WHERE ct_id='$ct_id'";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result)) 
	{
		$teacher_name=$row['teacher_name'];
		$full_marks=$row['full_marks'];
		$ct_no=$row['ct_no'];
		$course_id=$row['course_id'];
		break;
	}
?>
	<div id="body">
		<div class="content">
			
					<table>
					<tr>

						<td >
							<b>Course Teacher:</b>
						</td>

						<td >
							<?php echo $teacher_name; ?>
						</td>
					</tr>
					<tr>
						<td style="padding:15px;">
							<b>class Test No</b>
						</td>
						<td style="padding:15px;">
							<?php echo $ct_no; ?>
						</td>
					</tr>
					<tr>
						<td style="padding:15px;">
							<b>full marks</b>
						</td>
						<td>
							<?php echo $full_marks; ?>
						</td>
					</tr>
				</table>
			</br>
			</br>
				<table>
				 	<tr>
				 		<td style="padding:15px;">
				 			<b>Roll</b>
				 		</td>
				 		<td style="padding:15px;">
				 			<b>Name</b>
				 		</td>
				 		<td style="padding:15px;">
				 			<b>Marks</b>
				 		</td>
				 	</tr>
				 	<?php

				 		$result=mysql_query("SELECT * FROM ct_marks WHERE ct_id='$ct_id' ORDER BY roll");
				 		while ( $row=mysql_fetch_array($result)) { ?>
				 		<tr>
				 			<td style="padding:15px;"><?php echo $row['roll'];?> </td>
				 			<td style="padding:15px;"> <?php echo getFullNameByRoll($row['roll']); ?></td>
				 			<td style="padding:15px;"><?php echo $row['marks'] ;?> </td>
				 		</tr>
				 			
				 	<?php
				 	}
				 	?>
				 </table>
						 
		</div>

	</div>



<?php
	
	include ("processing/footer.php");
?>
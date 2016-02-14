<?php
	include ("processing/header.php");
?>
	<div id="body">
		<div class="content">
			<?php
			if(permissionNotStudent()){?>
			<h2>Update CT Schedule Here</h2>
			<form name="ct_form" enctype="multipart/form-data" method="post"  action="processing/ct_process.php" onsubmit="return validateCt()">
				<table id="login_table">
					<tr>
						<?php
							if(isset($_GET['ct']) && $_GET['ct']=='yes')
								echo '<b><p style="color:green";>Class test schedule was Updated successfully</p></b>';
						?>
					</tr>
					<tr>
						<td>
							intentded year
						</td>
						<td>
							<select name="year" id="yearselect" onchange="selectcourse();">
								<option value="0"></option>
								<option value="1">1st Year</option>
								<option value="2">2nd Year</option>
								<option value="3">3rd Year</option>
								<option value="4">4th Year</option>
							</select>
						</td>
					</tr>
					<tr>

						<td>
							Course tittle
						</td>
						<td>
							<select name="course_id" id="course">
							</select>
						</td>
					</tr>
					<tr>

						<td>
							Course Teacher
						</td>
						<td>
							<input type="text" name="teacher_name"/>
						</td>
					</tr>
					<tr>
						<td>
							Syllabus
						</td>
						<td>
							<textarea type="text" name="syllabus"/>Enter the syllabus Here</textarea>
						</td>
					</tr>
					

					<tr>

						<td>
							Date (yyyy-mm-dd)
						</td>
						<td>
							<input type="text" id="datepicker" name="date"/>
						</td>
					</tr>
					<tr>

						<td>
							Time HH:MM
						</td>
						<td>
							<input type="time" name="time"/>
						</td>
					</tr>	
					<tr>
						<td>
							<input id="login_btn" type="submit" value="submit"/>
						</td>
					</tr>

				</table>
			</form>
			<?php }

				if(true){ 
					$res = mysql_query("SELECT * FROM ct ORDER BY date,time");
				 ?>

					<table>
						<tr>
							<td style="padding:15px;font-weight:bold;">Course No</td>
							<td style="padding:15px;font-weight:bold;">Teacher</td>
							<td style="padding:15px;font-weight:bold;">Syllabus</td>
							<td style="padding:15px;font-weight:bold;">Date</td>
							<td style="padding:15px;font-weight:bold;">Time</td>
						</tr>
						<?php
							while($row = mysql_fetch_array($res)){  ?>
								<tr>
									<?php
										if(date("Y-m-d")>$row['date'])
											continue;
									?>
									<td style="padding:15px;"><?php echo $row['course_no'] ?></td>
									<td style="padding:15px;"><?php echo $row['teacher_id'] ?></td>
									<td style="padding:15px;"><?php echo $row['syllabus'] ?></td>
									<td style="padding:15px;"><?php echo $row['date'] ?></td>
									<td style="padding:15px;"><?php echo $row['time'] ?></td>
						<?php if(permissionOnlyTeacher())  { ?>	<td>
						<a href="processing/delete.php?id=<?php echo $row['ct_id'];?>&ct=yes"><img src="images/deleteButton.jpg"></a>
				<?php	}
						
					?>
						</td>		</tr>
							<?php }
						?>
						
					</table>

				<?php }

			 ?>
			</div>
		</div>
	</div>

<?php
	include ("processing/footer.php");
?>
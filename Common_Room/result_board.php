<html>
<?php
	include ("processing/header.php");
?>
	<div id="body">
		<div class="content">
			<h3>Result Board</h3>
			<?php 
					if(permissionOnlyTeacher())
			{ ?>
			<h2>Ressult Upload:</h2>
			<form name="ct_form" enctype="multipart/form-data" method="post"  action="result_upload.php" onsubmit="return validateCt()">
				<table id="login_table">
					<tr>
						<?php
							if(isset($_GET['ok']) && $_GET['ok']=='yes')
								echo '<b><p style="color:green";>Marks sheet was saved successfully</p></b>';
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
							<input id="login_btn" type="submit" value="Generate Marks sheet"/>
						</td>
					</tr>

				</table>
			</form>
			<?php } ?>
			<?php 
				$year=$_SESSION['year'];
				if(permissionOnlyTeacher())
						$sql="SELECT * FROM published_result ORDER BY published DESC";
					else
						$sql="SELECT * FROM published_result WHERE year='$year' ORDER BY published DESC";	
					$latest=$sql." LIMIT 0,3";
					$publish="result_publish.php?ct_id=";
			?>
			<h2>Latest CT Results:</h2>
			<ul>
				<?php 
				$result=mysql_query($latest);
				while ($row=mysql_fetch_array($result)) 
				{ 
					$ct_id=$row['ct_id'];
					$course_id=$row['course_id'];
					$ct_no=$row['ct_no'];
					$day=$row['published'];
					 ?>
					<li>
						<a href=" <?php echo $publish.$ct_id;?>"><u><?php echo getCourseNo($row['course_id'])." CT no ".$ct_no;?></u></a> published on <?php echo $day;?> </br>
					</li>
		<?php   } ?>
			</ul>
			<h2>All CT Results:</h2></br>
			<ul>
				<?php 
				$result=mysql_query($sql);
				while ($row=mysql_fetch_array($result)) 
				{ 
					$ct_id=$row['ct_id'];
					$course_id=$row['course_id'];
					$ct_no=$row['ct_no'];
					$day=$row['published'];
					 ?>
					<li>
						<a href=" <?php echo $publish.$ct_id;?>"><u><?php echo getCourseNo($row['course_id'])." CT no ".$ct_no;?></u></a> published on <?php echo $day;?> 
					</li>
		<?php   } ?>
			</ul>	
		</div>
	</div>
<?php
	include ("processing/footer.php");
?>
</html>
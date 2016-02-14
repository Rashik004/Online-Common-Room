<?php
	include ("processing/header.php");
?>
	<div id="body">
		<div class="content">
			<form name="upload_form" enctype="multipart/form-data" method="post" onsubmit="return validateForm()" action="processing/upload_process.php" >
				<table id="login_table">
					<tr>
						<?php
							if(isset($_GET['upload']) && $_GET['upload']=='yes')
								echo '<b><p style="color:green">your file was uploaded successfully</p></b>';
							else if(isset($_GET['error']) && $_GET['error']=='yes')
								echo '<b><p style="color:red">An Error occured while uploading file</p></b>';
							permissionCheck();
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
							Slide Title
						</td>
						<td>
							<input type="text" name="title"/>
						</td>
					</tr>

					<tr>
						<td>
							upload file
						</td>
						<td>
							<input type="file" name="slide">
						</td>
					</tr>	
					<tr>
						<td>
							<input id="login_btn" type="submit" value="submit"/>
						</td>
					</tr>
				</table>
			</form>
		</div>

	</div>



<?php
include ('processing/footer.php');
?>
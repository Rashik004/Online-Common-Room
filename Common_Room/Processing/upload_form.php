<?php
	include ("session_check.php");
	include ('db_constant.php');
	include ('functions.php')
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Online Common Room</title>
	<!-- Latest compiled and minified CSS -->
	
	
	<script src="scripts.js" type="text/javascript"></script>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href=../"plugin/all.css">
	<link rel="stylesheet" href="../plugin/demos.css">
</head>
<body>

	<div id="header">
	
		<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
		<ul>
			<li >
				<a href="http://localhost/Common_Room/index.php">home</a>
			</li>
			<li>
				<a href="about.php">about</a>
			</li>
			<li>
				<a href="class_lecture.php">Class lectures</a>
			</li>
			<li>
				<a href="ct_schedule.php">CT schedule</a>
			</li>
			<li>
				<a href="result_board.php">Result Board</a>
			</li>
			<!-- <li>
				<a href="blog.php">blog</a>
			</li> -->
			<li>
				<a href="contact.php">contact</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<div class="content">
			<form name="upload_form" enctype="multipart/form-data" method="post" onsubmit="return validateForm()" action="upload_process.php" >#vali
				<table id="login_table">
					<tr>
						<?php
							if(isset($_GET['upload']) && $_GET['upload']=='yes')
								echo '<b><p style="color:green">your file was uploaded successfully</p></b>';
							else if(isset($_GET['error']) && $_GET['error']=='yes')
								echo '<b><p style="color:red">An Error occured while uploading file</p></b>';
						?>
					</tr>
					<tr>
						<td>
							intentded year
						</td>
						<td>
							<select name="year" id="yearselect" onchange="selectcourse();">
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
include ('footer.php');
?>
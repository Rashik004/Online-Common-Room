<?php 
	ob_start();
	session_start();
	
	if(isset($_SESSION['id']))
		{
			header('Location:index.php');
			die();
		}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Online Common Room</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

	<script> /*server side form validation with javascript*/
		function validateForm()
		{
			var x=document.forms["login_form"]["user"].value;
			if (x==null || x=="")
			{
			  alert("User ID/Roll/e-mail must be filled out");
			  return false;
			}
		}
	</script>

</head>
<body>
	<div id="header">
		<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
		
	</div>
	<div id="body">
		<div class="content">
			<form name="login_form" action="Processing/registrySave.php"  method="post" onsubmit="return validateForm()">
				<span style="clear:both"></span>
				<table>

				</table>
				<table id="login_table">
					<tr>
						<td><h2>Registration Form</h2></td>
					</tr>
					<tr><td>
						<?php
							if(isset($_GET['error']) && $_GET['error']=='yes')
								echo '<p style="color:red">invalid username or password</p>';
						?></td>
					</tr>

					<tr>
						<td>
							First Name
						</td>
						<td>
							<input type="text" name="first_name"/>
						</td>
					</tr>
					<tr>
						<td>
							Last Name
						</td>
						<td>
							<input type="text" name="last_name"/>
						</td>
					</tr>
					<tr>
						<td>
							Roll
						</td>
						<td>
							<input type="text" name="roll"/>
						</td>
					</tr>
					<tr>
						<td>
							mail
						</td>
						<td>
							<input type="mail" name="mail"/>
						</td>
					</tr
					<tr>
						<td>
							Year
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
						<td>
							Category
						</td>
						<td>
							<select name="category" id="yearselect" onchange="selectcourse();">
								<option value="0"></option>
								<option value="teacher">Teacher</option>
								<option value="CR">CR</option>
								<option value="student">Student</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password" name="password"/>
						</td>
					</tr>
					<tr>
						<td>
							username
						</td>
						<td>
							<input type="text" name="username"/>
						</td>
					</tr>
					<tr>
						<td>
							Confirm Password
						</td>
						<td>
							<input type="password" name="confirmPassword"/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input id="login_btn" type="submit" value="Register"/>
						</td>
					</tr>

				</table>
				<span style="clear:both"></span>
		</form>
		</div>
	</div>
	<div id="footer">
		<div>
			<ul>
				<li class="twitter">
					<a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
				</li>
				<li class="facebook">
					<a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
				</li>
				<li class="googleplus">
					<a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
				</li>
			</ul>
			<p>
				&copy; Copyright 2012. All rights reserved By Rashik Hasnat
			</p>
		</div>
	</div>
</body>
</html>
<?php 
	ob_start();
	session_start();
	
	if(isset($_COOKIE['id']))
	{
		$_SESSION['id']=$_COOKIE['id'];
			$_SESSION['year']=$_COOKIE['year'];
							echo $_COOKIE["id"];
				die();
			
			$_SESSION['category']=$_COOKIE['category'];
			$_SESSION['full_name']=$_COOKIE['full_name'];
	}
	
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
			<form name="login_form" action="Processing/login_process.php"  method="post" onsubmit="return validateForm()">
				<span style="clear:both"></span>
				<table>
					<tr>
						<td><h2>Login to Enter the Online Common Room</h2></td>
					</tr>
					<tr>
						<td><h2>Not a member yet? click to <a href="register.php"><u>Register</u></a></h2></td>
					</tr>
				</table>
				<table id="login_table">
					<tr><td>
						<?php
							if(isset($_GET['error']) && $_GET['error']=='yes')
								echo '<p style="color:red">invalid username or password</p>';
						?></td>
					</tr>
					<tr>
						<td>
							User ID/Roll/e-mail
						</td>
						<td>
							<input type="text" name="user"/>
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password" name="pass"/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="checkbox" name="remember"/>Remember Me
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input id="login_btn" type="submit" value="login"/>
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
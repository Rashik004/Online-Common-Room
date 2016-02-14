<?php 
	ob_start();
	session_start();
	include 'processing/db_constant.php';

	
	if($_SESSION['category']!='admin')
		{
			header('Location:index.php');
			die();
		}
	$en=0;
	$sql="SELECT * FROM login WHERE enabled='0'";
	
	$result=mysql_query($sql);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Online Common Room</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
	<div id="header">
		<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
		
	</div>
	<div id="body">
		<div class="content">
			<h3>Pending Membership Requests</h3>
			<table>
				<?php
					while ($row=mysql_fetch_array($result)) 
					{	?>
						<tr>
							<td>Name:</td>
							<td><?php echo $row['full_name']?></td>
						</tr>
						<tr>
							<td>Roll:</td>
							<td><?php echo $row['roll']?></td>
						</tr>
						<tr>
							<td>Year:</td>
							<td><?php echo $row['year']?></td>
						</tr>
						<tr>
							<td>mail:</td>
							<td><?php echo $row['mail']?></td>
						</tr>
						<tr>
							<td>Category:</td>
							<td><?php echo $row['category']?></td>
						</tr>
						<tr><td><a href="processing/adminprocess.php?accept=no&id=<?php echo $row['id'];?>"><button type="button">Reject</button> </a></td></td>
							<td><a href="processing/adminprocess.php?accept=yes&id=<?php echo $row['id'];?>"><button type="button">Accept</button> </a></td>
						</tr>
				<?php
					}
				?>
			</table>

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
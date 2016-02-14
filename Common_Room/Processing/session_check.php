<?php
	session_start();
	if(!$_SESSION['id'])
	{
		header("Location:login_page.php");
		die();
	}
	else {?>
	
		
		<html>
			<div align="left" id="logout_btn"><?php if($_SESSION['category']=='admin'){?>
				<ul>
					<li>
						<a href="admin.php"><font size="5">Admin Panel</font></a>
					</li>
				</ul><?php }?>
			</div> 
			<div align="center"> Welcome <?php echo $_SESSION['full_name'];?></div>
			<div align="right" id="logout_btn" >
				<ul>
					<li>
							<a href="processing/logout.php"><font size="5">logout</font></a>
					</li>	
				</ul>
			</div>
		</html>
	<?php
}
?>

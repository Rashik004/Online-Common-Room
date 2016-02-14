<?php
	include ("processing/header.php");
?>
	<div id="body">
		<div class="content">
			 <h2>Recently uploaded slides</h2>
			<p>
				<?php
					$year=$_SESSION['year'];
					
					if($_SESSION['category']=='teacher' ||$_SESSION['category']=='admin')
						$sql="SELECT * FROM slides ORDER BY id DESC LIMIT 0,3";
					else
						{
							$sql="SELECT * FROM slides WHERE year='$year' ORDER BY id DESC LIMIT 0,3";
						}
					$result=mysql_query($sql);					
					while ($row= mysql_fetch_array($result) ) 
					{
						echo '<p><a href="'.$row['directory'].'">' .$row['title']. '</a> on ' . getCourseNo($row['course_id']);	?>
						<?php if(permissionOnlyTeacher())  { ?>	
						<a href="processing/delete.php?id=<?php echo $row['id'];?>"><img src="images/deleteButton.jpg"></a>
				<?php	}}
					
				?>	
			</p>
			<h2>All uploads:</h2>
			<ul>
				<li>
				
					<?php
						if(permissionOnlyTeacher())
							$sql="SELECT * FROM course ORDER BY year";
						else
							$sql="SELECT * FROM course WHERE year='$year'";
						$courseResult=mysql_query($sql);
						while ($courseRow=mysql_fetch_array($courseResult)) 
						{
							$id=$courseRow['course_id'];
							$sql="SELECT * FROM slides WHERE course_id='$id'";
							$slideResult=mysql_query($sql);
							$got=0;
							while ($slideRow=mysql_fetch_array($slideResult))
							{
								if(!$got)
								{
									$got++;
									echo "<h3>".getCourseNo($slideRow['course_id'])."</h3>";
								}	
								?>
								<a href="<?php $slideRow['directory']?>"><u><?php echo $slideRow['title'];?></u></a>
								<?php
									if(permissionOnlyTeacher())  
									{ ?>	
										<a href="processing/delete.php?id=<?php echo $slideRow['id'];?>"><img src="images/deleteButton.jpg"></a>
								<?php }
						echo "</br>";		
								
							} 
						}
					?>
							
				</li>
				
			</ul>
		
			<?php
				if($_SESSION['category']!='student'){
			?>
			<ul>	
				<li>
					<h4><u><a href="upload_form.php">upload slide</a></u></h4>
				</li>				
			</ul>
			<?php
			 } 
			 ?>
		</div>

	</div>



<?php
	
	include ("processing/footer.php");
?>
<?php
	$con=mysql_connect("localhost", "root", "");
	mysql_select_db('test', $con);
	/*if($con)
		echo "hell yeah";*/
	if(!$con)
	{
		echo "database connection failed";
		die();
	}
?>
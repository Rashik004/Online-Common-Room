<?php
	ob_start();
	session_start();
	include 'db_constant.php';
	include 'functions.php';
	$username=$_POST['user'];
	$password=$_POST['pass'];
	login($username, $password);
	checkCookie();

function login($name, $password) #eita function akare na nile kaaj hoina. keno hoina jante hobe
{
	$sql="SELECT * FROM login WHERE (username='$name' OR roll='$name' OR mail='$name') AND password='$password'";

	$result=mysql_query($sql);
	echo mysql_num_rows($result);
	//die();
		
	while ($row=mysql_fetch_array($result)) 
	{
		$enabled=$row['enabled'];
		if(!$enabled)
		{
			header('Location: ../login_page.php?error=yes');
			die();
		}
		$givenPass=$row['password'];
		$nowId=$row['id'];
		$category=$row['category'];
		$year=$row['year'];
		
		
		if($givenPass==$password && ($name==$row['username'] || $name==$row['roll'] || $name==$row['mail']))
		{
			if(isset($_POST['remember']) && $_POST['remember']=='on')
			{
				setcookie("year", $year, time()+60);
				setcookie("id", $nowId, time()+60);

				setcookie("category", $category, time()+60);
				setcookie("full_name", $full_name, time()+60);
			}
			else
			{
				setcookie("year", $year, time()-60);
				setcookie("id", $nowId, time()-60);
				setcookie("category", $category, time()-60);
				setcookie("full_name", $full_name, time()-60);
			}				
			$_SESSION['username']=$name;
			
			$_SESSION['year']=$year;
			$_SESSION['id']=$nowId;
			$category=$row['category'];
			$_SESSION['category']=$category;
			$_SESSION['full_name']=$row['full_name'];
			header('Location:../index.php');
			die();
		}
		
	}
	/*header('Location:raju.php?error=yes');*/
	header('Location: ../login_page.php?error=yes');
}
?>
<html>
<a href="logout.php">logout</a>
</html>
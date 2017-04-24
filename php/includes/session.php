<?php
	include 'dbconfig.php';
	session_start();

	try{
		$user_check = $_SESSION['login_user'];
		$ses_sql = mysqli_query($con,"SELECT name FROM customer_table WHERE name = '$user_check'");
		$row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
		$login_session = $row['name'];

		if (!isset($_SESSION['login_user']) && !isset($_SESSION['login_email'])) {
			header("location: index.html");
		}	
	}catch(exception $e){
		echo '<script> alert("' . $e . '"");</script>';
	}
	
?>
<?php
	// include 'includes/dbconfig.php';

	$username = $_SESSION['login_user'];
	$list_sql = mysqli_query($con,"SELECT * FROM customer_table WHERE name = '$username'");
	$list_array = mysqli_fetch_array($list_sql, MYSQL_ASSOC);
?>
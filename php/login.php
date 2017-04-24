<?php
	session_start();
	include 'includes/dbconfig.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$password = $_POST["password"];
		// $password = md5($password);
		$login_err = "";

		$login_query = mysqli_query($con,"SELECT * FROM customer_table WHERE name = '$username' AND password = '$password'");
		$login_result = mysqli_fetch_row($login_query);
		$login_array = mysqli_fetch_array($login_query, MYSQL_ASSOC);

		if ($login_result) {
			$_SESSION['login_user'] = $username;
			$_SESSION['login_email'] = $login_array['emailid'];
			header("location: ../home.php");
		}else{
			echo '<script> alert("Invalid credentials");</script>';
			echo '<script> window.location="../index.html"; </script>';
		}
	}
?>
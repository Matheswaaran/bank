<?php
	include 'includes/dbconfig.php';
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$accno = $_POST['accno'];
		$key_value = $_POST['key'];

		$reg_check_sql = mysqli_query($con, "SELECT * FROM customer_table WHERE name = '$username' and password = '$password'");
		$reg_check_result = mysqli_fetch_array($reg_check_sql, MYSQLI_ASSOC);

		if ($reg_check_result) {
			$reg_query = "UPDATE customer_table SET keysvalue = '$key_value' WHERE name = '$username'";
			if (mysqli_query($con, $reg_query) == true ) {
				echo '<script> alert("Registration Successful");</script>';
				$_SESSION['login_user'] = $reg_check_result['name'];
				$_SESSION['login_email'] = $reg_check_result['emailid'];
				echo '<script> window.location="../home.php"; </script>';
			}else{
				echo '<script> alert("Registration Error. Please try Again.");</script>';
				echo '<script> window.location="../login.html"; </script>';
			}
		}else{
			echo '<script> alert("Username does not available. Contact the bank.");</script>';
			header('Refresh:1 ; URL=../index.html');
			// if ($password == $repassword) {
			// 	$password = md5($password);
			// 	$reg_query = "INSERT INTO customer_table(first_name,last_name,username,password,emailid) VALUES('$first_name','$last_name','$username','$password','$email')";
			// 	if (mysqli_query($con, $reg_query) == true ) {
			// 		echo '<script> alert("Registration Successful");</script>';
			// 		$_SESSION['login_user'] = $username;
			// 		echo '<script> window.location="../home.php"; </script>';
			// 	}else{
			// 		echo '<script> alert("Registration Error. Please try Again.");</script>';
			// 		echo '<script> window.location="../login.html"; </script>';
			// 	}
			// }else{
			// 	echo '<script> alert("Password does not match");</script>';
			// 	echo '<script> window.location="../login.html"; </script>';
			// }
		}
	}
?>
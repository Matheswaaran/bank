<?php
	// include 'includes/dbconfig.php';
	include 'includes/session.php';
	$rec_accno = $_POST['rec_accno'];
	$email = $_SESSION['login_email'];

	$rec_check = mysqli_query($con,"SELECT name FROM customer_table WHERE accountno = '$rec_accno'");
	
	if ($rec_check) {
		$randomno = rand(100000,999999);
		$_SESSION['randomno'] = $randomno;
		$subject = "Bank authentication";

		$message = "<b>Code for authentication is given below</b><br>";
		$message .= "<h1>".$randomno."</h1>";

		$header = "From:bank@bank.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";

		$retval = mail($email,$subject,$message,$header);

		echo '<script> window.location="../otp.html"; </script>';
	}else{
		echo '<script> alert("Invalid Account Number. Please try again.");</script>';
		echo '<script> window.location="../home.php"; </script>';
	}

?>
<?php
	
	include 'php/includes/session.php';

	// $randomno = rand(100000,999999);
	$otp = $_POST['otp'];
	$email = $_SESSION['login_email'];
	$randomno = $_SESSION['randomno'];
	// $subject = "Bank authentication";

	// $message = "<b>Code for authentication is given below</b><br>";
	// $message .= "<h1>".$randomno."</h1>";

	// $header = "From:bank@bank.com \r\n";
	// $header .= "MIME-Version: 1.0\r\n";
	// $header .= "Content-type: text/html\r\n";

	// $retval = mail($email,$subject,$message,$header);

	if($randomno == $otp) {
	  echo '<script> alert("Transaction Successful");</script>';
	}else {
	 	echo '<script> alert("Incorrect One-Time Password");</script>';
		// echo '<script> window.location="../home.php"; </script>';
	}
?>

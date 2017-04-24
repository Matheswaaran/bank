<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_DATABASE', 'anomalydetection');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE) or die('<script> alert("Cannot connect to Database. Please try again later.");</script>');
?>
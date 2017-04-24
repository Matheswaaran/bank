<?php
	include 'includes/dbconfg.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$title = $_POST["title"];
		$team_name = $_POST["team_name"];
		$department = $_POST["department"];
		$year = $_POST["year"];
		$description = $_POST["description"];
		$coordinator = $_POST["coordinator"];

		$create_query = mysqli_query($con,"INSERT INTO project_table(Team_Name,Department,Academic_year,Project_title,Description,Project_coordinator) VALUES ('$title','$team_name','$department','$year','$description','$coordinator')");
	}
?>
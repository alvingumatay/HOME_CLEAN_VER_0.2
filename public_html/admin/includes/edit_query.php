<?php
	if(ISSET($_POST['submit'])){
		$password = md5($_POST['password']);
		$conn = new mysqli("sql200.epizy.com","epiz_31379914","8DFIJ4omSmUw9","epiz_31379914_home_activity") or die(mysqli_error());
		$conn->query("UPDATE `admin` SET `username`='username', `email`='email', `password` = '$password'") or die(mysqli_error());
		header("location: settings.php");
	}
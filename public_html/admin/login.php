<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(ISSET($_POST['login'])){
		$conn = new mysqli("sql200.epizy.com","epiz_31379914","8DFIJ4omSmUw9","epiz_31379914_home_activity") or die(mysqli_error());
		$query = $conn->query("SELECT *FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$valid = $query->num_rows;
			if($valid > 0){
				$_SESSION['admin_id'] = $fetch['admin_id'];
				header("location:./dashboard.php");
			}else{
				echo "<script>alert('Invalid username or password')</script>";
				echo "<script>window.location = 'index.php'</script>";
			}
		$conn->close();
	}	
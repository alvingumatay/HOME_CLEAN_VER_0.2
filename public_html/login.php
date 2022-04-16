<?php
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$status= '1';
	if(ISSET($_POST['login'])){
		$conn = new mysqli("sql200.epizy.com","epiz_31379914","8DFIJ4omSmUw9","epiz_31379914_home_activity") or die(mysqli_error());
		$query = $conn->query("SELECT *FROM `users` WHERE  `status` = '$status'  && `email` = '$email' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$valid = $query->num_rows;
			if($valid  > 0){
				$_SESSION['user_no'] = $fetch['user_no'];
				header("location:./user.php");
			}else{
				echo "<script>alert('Invalid email or password')</script>";
				echo "<script>window.location = 'index.php'</script>";
			}
		$conn->close();
	}	

	?>


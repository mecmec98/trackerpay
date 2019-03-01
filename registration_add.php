
<?php

session_start();
include 'conn.php';

	//if(isset($_POST['submit'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$company = $_POST['company_name'];
		$contact = $_POST['contact'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hash = password_hash($password, PASSWORD_DEFAULT);


		$sql = "INSERT INTO admin (username, password, firstname, lastname, photo, email, company, created_on, type) VALUES ('$username', '$hash', '$firstname', '$lastname', '$filename', '$email', '$company', NOW(), 2)";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee added successfully';
			echo '<div class="alert alert-success">Sucess</div>';

				header('location: index.php'); 
			
		}
		else{

			$_SESSION['error'] = $conn->error;
		}

	//}
	//else{
	//	echo "test";
		//$_SESSION['error'] = 'Fill up add form first';
	//}

	
	?>
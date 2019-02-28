<?php
	include 'includes/session.php';
	$admin_id = $_SESSION['admin'];

	//if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address2'];
		$birthdate = $_POST['birthday'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];

		$sql = "INSERT INTO pds (firstname, lastname, address, birthdate, contact_info, gender, created_on, admin_id) VALUES ('$firstname', '$lastname', '$address', '$birthdate', '$contact', '$gender', NOW(), '$admin_id')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Recruit added successfully';
		}else{
			$_SESSION['error'] = $conn->error;
		}

	//	} 
	//	else{
	//	$_SESSION['error'] = 'Fill up add form first';
	//	}
	
	

	header('location: home.php');
?>
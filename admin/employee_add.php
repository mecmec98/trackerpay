<?php
	include 'includes/session.php';
	$admin_id = $_SESSION['admin'];

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'];
		$password = $_POST['password'];
		$hash = password_hash($password, PASSWORD_DEFAULT);

		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$employee_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO employees (employee_id, firstname, lastname, address, birthdate, contact_info, gender, position_id, schedule_id, photo, created_on, admin_id) VALUES ('$employee_id', '$firstname', '$lastname', '$address', '$birthdate', '$contact', '$gender', '$position', '$schedule', '$filename', NOW(), '$admin_id')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee added successfully';
			$sql = "SELECT * FROM employees WHERE firstname = '$firstname' AND lastname = '$lastname'";
			$query = $conn->query($sql);
			$row = $query->fetch_assoc();
			$username = $row['employee_id'];
			$sql = "INSERT INTO admin (username, password, firstname, lastname, photo, created_on, type) VALUES ('$username', '$hash', '$firstname', '$lastname', '$filename', NOW(), 3)";
			$conn->query($sql);
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: employee.php');
?>
<?php
include 'includes/session.php';


$q = intval($_GET['q']);
$sql = "SELECT * FROM psd"
$query = $conn->query($sql);
$row = $query->fetch_assoc()){

$firstname = $row['firstname'];	

?>
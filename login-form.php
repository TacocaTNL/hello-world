<?php

$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);

include 'db.php';

$sql = "SELECT * FROM `users` WHERE `email`='$email'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if ($count == 1) {
	$row = mysqli_fetch_array($result);
	$salt = $row['salt'];
	$saltPass = $salt . $password;
	$encrypt = hash('sha256', $saltPass);
	if ($row['password'] == $encrypt) {
		header("Location: index.php");
	} else {
		//something
	}
} else {
		//something
}

?>

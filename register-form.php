<?php

$email = htmlentities($_POST['email']); // email input
$password = htmlentities($_POST['password']); // password input
$passwordr = htmlentities($_POST['passwordr']); //retype password input

include ('db.php');

$salt = bin2hex(mcrypt_create_iv(32));
$saltPass = $salt . $password;
$encrypt = hash('sha256', $saltPass);
$sql_check = "SELECT * FROM `users` WHERE `email`='$email'";
$result = mysqli_query($conn, $sql);
if ($result == 0) {
$sql = "INSERT INTO `users` (`email`, `password`, `salt`) VALUES ('$email', '$encrypt', '$salt')";
if(mysqli_query($conn, $sql)) {
	header("Location: index.php);
	session_destroy();
}
} else {
	//something
}
?>

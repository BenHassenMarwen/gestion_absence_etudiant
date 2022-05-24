<?php

error_reporting(0);
session_start();


$host = "localhost";

$user = "root";

$password = "";

$db = "gabs";


$data = mysqli_connect($host, $user, $password, $db);


if ($data === false) {
	die("connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['username'];

	$pass = $_POST['password'];


	$sql = "select * from user where login='" . $name . "' AND password='" . $pass . "'  ";

	$result = mysqli_query($data, $sql);

	$row = mysqli_fetch_array($result);



	if ($row["type_user"] == "etudiant") {

		$_SESSION['username'] = $name;

		$_SESSION['type_user'] = "etudiant";

		header("location:studenthome.php");
	} elseif ($row["type_user"] == "admin") {
		$_SESSION['username'] = $name;

		$_SESSION['type_user'] = "admin";

		header("location:adminhome.php");
	} else {


		$message = "username or password do not match";

		$_SESSION['loginMessage'] = $message;

		header("location:login.php");
	}
}

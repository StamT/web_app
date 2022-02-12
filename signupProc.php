<?php

//error_reporting(0);
require 'conf.php';

function validate_input($data) {
	$data = trim($data); //Removes whitespace and other predefined characters from both sides of a string
	$data = stripslashes($data); //Removes backslashes (\) from the user input data
	$data = htmlspecialchars($data); //Converts special characters to HTML entities
	return $data;
}

$name = validate_input($_POST['name']);
$password = validate_input($_POST['password']);
$email = validate_input($_POST['email']);

//Before the new user registration we check if the given username already exists in database
$searchQuery = $db->query("SELECT * FROM users WHERE AES_ENCRYPT('$email','$encKey') = '$email'") or die($db->error); //Κατά την ολοκλήρωση να διαγραφεί το die ή το error_reporting

if ($searchQuery->num_rows) {
    echo '<script language="javascript">alert("This email already exists!");</script>';
} else {
    $insertQuery = $db->query("INSERT INTO users (fullname, email, password)
			                    VALUES ('$name', AES_ENCRYPT('$email','$encKey'), AES_ENCRYPT('$password','$encKey'))") or die($db->error); // Delete die function on completion
    echo '<script language="javascript">alert("User created!");</script>';
}

mysqli_close($db);

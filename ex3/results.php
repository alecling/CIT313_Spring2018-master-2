<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function autoload($class) {
	include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('autoload');

?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT313 - Exercise 3 - alexa clingerman</title>
</head>
<body>
<?php

function test_user($user) {

	if($user instanceof RegisteredUser) {

		echo "The registered user's first name is: ".$user->first_name."<br/>";
		echo "The registered user's last name is: ".$user->last_name."<br/>";
		echo "The registered user's email address is: ".$user->email_address."<br/>";

	}

	else {

		echo "Not a Registered User Object";

	}

}


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$user = new RegisteredUser('newuser','regular');

$user->first_name = $fname;
$user->last_name = $lname;
$user->email_address = $email;

test_user($user);

echo "<hr/>Processing Complete";


?>


</body>
</html>

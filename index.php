<?php 
	$name = $_POST["user_name"];
	$pass = $_POST["user_pass"];

	$validuser = false;

	$json = file_get_contents("users.json");
	$data = json_decode($json, true);

	foreach ($data['users'] as $field => $value) {
		if($field == $name && $value == $pass)
		{
			$validuser = true;
		}
	}
	if($validuser){
		echo "Welcome master";
	}
	else{
		echo "Invalid name or password";
	}
?>
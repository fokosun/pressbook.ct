<?php

require __DIR__ . '/vendor/autoload.php';

use Nasa\Astronaut;

//form validation
if (!isset($_POST['name']) || $_POST['name'] === "" || count($_POST['name']) == 0) {
	header("Location: http://localhost:8081/?nameErr=true");
} else if (!isset($_POST['weight']) || $_POST['weight'] === "") {
	header("Location: http://localhost:8081/?weightErr=true");
} else {
	$astronaut = new Astronaut([
		'name' => $_POST['name'],
		'weight' => $_POST['weight']
	]);

	if ($astronaut->save()) {
		header("Location: http://localhost:8081/?success=true");
	} else {
		var_dump('There were errors.');
		die();
	}
}

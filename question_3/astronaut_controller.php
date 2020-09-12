<?php

require __DIR__ . '/vendor/autoload.php';

use Nasa\Astronaut;

//form validation
if ($_POST['name'] == "" || $_POST['weight'] == "" || !is_numeric($_POST['weight'])) {
	header("Location: http://localhost:8081/?nameErr=true&weightErr=true");
}

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

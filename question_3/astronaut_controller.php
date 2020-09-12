<?php

require __DIR__ . '/vendor/autoload.php';

use Nasa\Astronaut;

$data = [
	'name' => $_POST['name'],
	'weight' => $_POST['weight']
];

//TODO: input validation

$astronaut = new Astronaut($data);

if ($astronaut->save()) {
	$_SERVER['astronauts'] = ['key' => 'some data'];
	header("Location: http://localhost:8081/");
} else {
	var_dump('There were errors.');
	die();
}

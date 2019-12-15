<?php

require_once __DIR__ . "/vendor/autoload.php";

use DevCat\ResponseClass\JsonResponse;

$student = [
	'name' => 'John Doe',
	'course' => 'Sofware Engineering',
	'level' => 200,
	'collections' => [
		'books' => 'Intro to UML',
		'music' => 'rap'
	]
];

new JsonResponse('unauthorized', '', $student);
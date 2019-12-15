<?php

require_once __DIR__ . "/vendor/autoload.php";

use DevCat\ResponseClass\JsonResponse;

$student = array(
	'name' => 'John Doe',
	'course' => 'Sofware Engineering',
	'level' => 200,
	'collections' => array(
		'books' => 'Intro to UML',
		'music' => 'rap'
	)
);

new JsonResponse('unauthorized', '', $student);
# json-response
A simple class that returns a properly formatted json response with HTTP status

## Installation
composer require devcat/json-response

### Usage

```php
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
?>
```

### Param 1 (Required)
1. success or ok - 200 http status
2. unauthorized - 401 http status
3. exception - 500 http status (internal server error)

### Param 2 (Optional)
string - the return message, use empty quote if not available

### Param 3 (Optional)
Array - Array of Data
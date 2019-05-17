<?php
use Framework\Http\Request;
require __dir__ . "/../vendor/autoload.php";

### Initialization

$request = new Request($_GET, $_POST);

### Action

$name = $request->getQueryParams()['name'] ?? 'Guest';
header('X-Developer: Nick');
echo 'Hello, ' . $name . '!';
<?php
use Framework\Http\Request;
use Framework\Http\RequestFactory;
use Framework\Http\Response;
require __dir__ . "/../vendor/autoload.php";

### Initialization

$request = RequestFactory::fromGlobals();

### Action

$name = $request->getQueryParams()['name'] ?? 'Guest';
$response = (new Response('Hello, ' . $name . '!'))
	->withHeader('X-Developer', 'Nick');
header('HTTP/1.1 ' . $response->getStatusCode() . ' ' . $response->getReasonPhrase());
foreach ($response->getHeaders() as $name => $value) {
	header($name . ':' . $value);
}
echo $response->getBody();
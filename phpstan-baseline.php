<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Sample\\:\\:\\$property\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/index.php',
];
$ignoreErrors[] = [
	'message' => '#^Function func not found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/index.php',
];
$ignoreErrors[] = [
	'message' => '#^Instantiated class Model not found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/index.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];

<?php

require_once __DIR__ . '/../vendor/autoload.php';

echo "Hello world" . PHP_EOL;

$test = new \Ashvedov\ArrayFlatten\ArrFlatten(array: [[1, 2, [3, 5], [[4, 3], 4], 10], [1, 2, 3, 5, 4, 3, 4, 10]]);
$test2 = new \Ashvedov\ArrayFlatten\ArrFlatten(array: ['a', 'b']);
$test3 = new \Ashvedov\ArrayFlatten\ArrFlatten(array: ['a', 'b', [1, 2, [3, 'test', [4, 5]]]]);

echo "<pre>";
var_dump(value: $test->flattenArray());
echo PHP_EOL;
var_dump($test2->flattenArray());
echo PHP_EOL;
var_dump($test3->flattenArray());
echo "</pre>" . PHP_EOL;

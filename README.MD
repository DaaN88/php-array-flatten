### Descriptions
The package allows you to convert a simple numbered array of any nesting to a simple one-dimensional (without nesting) array

### Getting started

#### Requirements
- PHP 8.1
- Composer 2+

#### Installation
```
composer require ashvedov/array-flatten
```

#### Usage
Anywhere in your code, just include the class ArrFlatten in the use section and you're good to go.

#### Example
```
use Ashvedov\ArrayFlatten\ArrFlatten;
$test = new ArrFlatten(array: [[1, 2, [3, 5], [[4, 3], 4], 10], [1, 2, 3, 5, 4, 3, 4, 10]]);
```

#### Test
You can also raise docker containers. Go to the package directory and execute:
```
docker-compose build
```
```
docker-compose -p 'custom-image-name' up -d 
```
If the containers have started, then open in the browser:
```
http://localhost:8006/
```
You can experiment with arrays in:
```
src/index.php
```
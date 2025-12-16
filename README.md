#  nechin/laravel-helpers
[![Source Code][badge-source]][source]
<!--  [![Latest Version][badge-release]][release]
[![Software License][badge-license]][license]
[![Total Downloads][badge-downloads]][downloads] -->

## About

Laravel helpers package that extends a different facades

## Installation

The preferred method of installation is via [Packagist][packagist] and [Composer][composer]. Run the following command to install the package and add it as a requirement to your project's `composer.json`:

```bash
composer require nechin/laravel-helpers
```

## Requirements

Laravel 5.4
PHP 8.0

## Examples

Method __fileExt__ for the *Str* facade, that return a file extension by the file path
```php
\Illuminate\Support\Str::fileExt('path\to\file.ext'); // "ext"
```

Method __randomParts__ for the *Str* facade, that return a string with random generated parts of string separated by the separator
```php
\Illuminate\Support\Str::randomParts(4, 5, '+'); // "RnHxg+R9i1r+3F3P8+HJ9FT"
```

Method __redirectList__ for the *Route* facade, that adds the ability to specify a list of a redirects

```php
// routes/web.php
\Illuminate\Routing\Route::redirectList([
    '/from' => '/to'
]);
```

Method __delete__ for the *Arr* facade, that delete elements by the value
```php
$array = [1, 2, '1', 3];
\Illuminate\Support\Arr::delete($array, 1); // [2, 3]
\Illuminate\Support\Arr::delete($array, 1, true); // [2, '1', 3]
```

Method __pullAll__ for the *Arr* facade, that getting array elements by value
```php
$array = [1, 2, 'foo' => '1', 3];
\Illuminate\Support\Arr::pullAll($array, 1); // [0 => 1, 'foo' => 1]
\Illuminate\Support\Arr::pullAll($array, 1, true); // [0 => 1]
```

Method __pullFirst__ for the *Arr* facade, that getting first array element by value
```php
$array = [1, 2, 'foo' => '3', 3];
\Illuminate\Support\Arr::pullFirst($array, 3); // ['foo' => 3]
\Illuminate\Support\Arr::pullFirst($array, 3, true); // [2 => 3]
```

## Copyright and license

The nechin/laravel-helpers library is copyright © [Alexander Vitkalov](http://vitkalov.ru/) and licensed for use under the MIT License (MIT). Please see [LICENSE][license] for more information.

[packagist]: https://packagist.org/packages/nechin/laravel-helpers
[composer]: http://getcomposer.org/

[badge-source]: https://img.shields.io/badge/source-nechin/laravel--helpers-blue

[source]: https://github.com/nechin/laravel-helpers
[release]: https://packagist.org/packages/nechin/laravel-helpers
[license]: https://github.com/nechin/laravel-helpers/blob/master/LICENSE
[downloads]: https://packagist.org/packages/nechin/laravel-helpers

# Laravel helpers package that extends a different facades

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
$array = [1, 2, 1, 3];
\Illuminate\Support\Arr::delete($array, 1); // [2, 3]
```

Validator __unique_if__ in progress

Arr __emptyAll__ in progress

Arr __objToArray__ in progress

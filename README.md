# Laravel helpers for a different facades

Method __fileExt__ to the *Str* facade, that return a file extension by the file path
\Illuminate\Support\Str::fileExt('path\to\file.ext')

Method __redirectMap__ to the *Route* facade, that adds the ability to specify a list of redirects

\Illuminate\Routing\Route::redirectMap([
    '/from' => '/to'
]);

<?php

namespace Nechin\LaravelFileExt;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class FileExtServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro('file_ext', fn(string $path) => pathinfo($path, PATHINFO_EXTENSION));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }
}

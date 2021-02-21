<?php

namespace nechin\LaravelHelpers;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use nechin\LaravelHelpers\Mixins\RouteMixin;
use nechin\LaravelHelpers\Mixins\StrMixin;
use ReflectionException;

class FileExtServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     * @throws ReflectionException
     */
    public function boot()
    {
        Str::mixin(new StrMixin());
        Route::mixin(new RouteMixin());
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

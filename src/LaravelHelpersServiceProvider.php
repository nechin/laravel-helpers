<?php

namespace Nechin\LaravelHelpers;

use Illuminate\Routing\Route;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Nechin\LaravelHelpers\Mixins\ArrMixin;
use Nechin\LaravelHelpers\Mixins\RouteMixin;
use Nechin\LaravelHelpers\Mixins\StrMixin;
use ReflectionException;

class LaravelHelpersServiceProvider extends ServiceProvider
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
        Arr::mixin(new ArrMixin());
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

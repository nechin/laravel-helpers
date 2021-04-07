<?php

namespace Nechin\LaravelHelpers\Mixins;

use Closure;
use Illuminate\Support\Facades\Route;

class RouteMixin
{
    /**
     * Define redirect list
     *
     * <code>
     * // routes/web.php
     * \Illuminate\Routing\Route::redirectList([
     *     '/from' => '/to'
     * ]);
     * </code>
     *
     * @return Closure
     */
    public function redirectList()
    {
        return function(array $map, int $status = 302) {
            foreach ($map as $old => $new) {
                Route::redirect($old, $new, $status);
            }
        };
    }
}

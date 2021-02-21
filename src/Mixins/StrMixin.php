<?php

namespace nechin\LaravelHelpers\Mixins;

use Closure;

class StrMixin
{
    /**
     * Get file extension from path
     *
     * @return Closure
     */
    public function fileExt()
    {
        return function(string $path) {
            pathinfo($path, PATHINFO_EXTENSION);
        };
    }
}

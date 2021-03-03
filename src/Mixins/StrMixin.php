<?php

namespace Nechin\LaravelHelpers\Mixins;

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
            return pathinfo($path, PATHINFO_EXTENSION);
        };
    }
}

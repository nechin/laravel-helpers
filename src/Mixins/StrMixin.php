<?php

namespace Nechin\LaravelHelpers\Mixins;

use Closure;
use Illuminate\Support\Str;

class StrMixin
{
    /**
     * Get file extension from path
     *
     * <code>
     * \Illuminate\Support\Str::fileExt('path\to\file.ext'); // "ext"
     * </code>
     *
     * @return Closure
     */
    public function fileExt()
    {
        return function(string $path) {
            return pathinfo($path, PATHINFO_EXTENSION);
        };
    }

    /**
     * Generate random string with the separator
     *
     * <code>
     * \Illuminate\Support\Str::randomParts(4, 5, '+'); // "RnHxg+R9i1r+3F3P8+HJ9FT"
     * </code>
     *
     * @return Closure
     */
    public function randomParts()
    {
        return function(int $parts, int $partLength, string $separator = '-') {
            if ($parts < 1 || $partLength < 1) {
                return "";
            }
            $length = $parts * $partLength;
            return implode($separator, str_split(Str::random($length), $partLength));
        };
    }
}

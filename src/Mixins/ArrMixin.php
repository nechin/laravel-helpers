<?php

namespace Nechin\LaravelHelpers\Mixins;

use Closure;
use Illuminate\Support\Arr;

class ArrMixin
{
    /**
     * Delete array elements by value
     *
     * <code>
     * $array = [1, 2, 1, 3];
     * \Illuminate\Support\Arr::delete($array, 1); // [2, 3]
     * </code>
     *
     * @return Closure
     */
    public function delete()
    {
        return function(array $array, $needle, bool $strict = null) {
            if (Arr::accessible($array)) {
                foreach (array_keys($array, $needle, $strict) as $key) {
                    unset($array[$key]);
                }
            }

            return $array;
        };
    }

    /**
     * Получение элемента массива, когда в массиве есть null
     * Arr::take()
     */
}

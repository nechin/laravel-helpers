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
        return function (array $array, $needle, bool $strict = false) {
            if (Arr::accessible($array)) {
                foreach ($array as $key => $value) {
                    $isMatch = $strict ? $value === $needle : $value == $needle;
                    if ($isMatch) {
                        unset($array[$key]);
                    }
                }
            }

            return $array;
        };
    }

    /**
     * Getting array elements by value
     *
     *  <code>
     *  $array = [1, 2, 'second' => 1, 3];
     *  \Illuminate\Support\Arr::pullAll($array, 1); // [0 => 1, 'second' => 1]
     *  </code>
     *
     * @return Closure
     */
    public function pullAll()
    {
        return function (array $array, mixed $needle, bool $strict = null) {
            $searchArray = [];

            if (Arr::accessible($array)) {
                foreach ($array as $key => $value) {
                    $isMatch = $strict ? $value === $needle : $value == $needle;
                    if ($isMatch) {
                        $searchArray[$key] = $value;
                    }
                }
            }

            return $searchArray;
        };
    }

    /**
     * Getting first array element by value
     *
     *  <code>
     *  $array = [1, 2, 'second' => 1, 3];
     *  \Illuminate\Support\Arr::pullFirst($array, 1); // [0 => 1]
     *  </code>
     *
     * @return Closure
     */
    public function pullFirst()
    {
        return function (array $array, mixed $needle, bool $strict = null) {
            if (Arr::accessible($array)) {
                foreach ($array as $key => $value) {
                    $isMatch = $strict ? $value === $needle : $value == $needle;
                    if ($isMatch) {
                        return [$key => $value];
                    }
                }
            }

            return [];
        };
    }
}

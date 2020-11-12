<?php

if (!function_exists('sortArrayByArray')) {
    /**
     * Reorder array by another array
     *
     * @param array $array
     * @param array $sort
     *
     * @return mixed|string
     */
    function sortArrayByArray(array $array, array $sort)
    {
        $keys = array_keys($array);

        $intersect   = array_intersect($sort, $keys);
        $diff        = array_diff($keys, $intersect);
        $orderedKeys = array_merge($intersect, $diff);

        $result = [];
        foreach ($orderedKeys as $key) {
            $result[$key] = $array[$key];
        }

        return $result;
    }
}

if (!function_exists('getFlags')) {
    /**
     * Reorder array by another array
     *
     * @param array $array
     * @param array $sort
     *
     * @return mixed|string
     */

    /**
     * @param string $value
     * @return mixed
     */
    function getFlags(string $value){
        return 'assets/media/flags/'.$value.'.svg';
    }
}


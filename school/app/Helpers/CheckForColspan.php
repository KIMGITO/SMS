<?php

if (!function_exists('checkForColspan')) {
    function checkForColspan($string)
    {
        if (strpos($string, 'colspan') !== 0) {
            return [false, $string];
        }

        $parts = explode(',', $string, 2);
        $spanNumber = substr($parts[0], 7);
        $tdata = $parts[1];

        $spanNumber =  is_numeric($spanNumber) ? intval($spanNumber) : false;

        return [$spanNumber, $tdata];
        
    }
}

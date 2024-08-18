<?php

if (!function_exists('checkForImage')) {
    function checkForImage($string)
    {
       
        if (strpos($string, 'img') !== 0) {
            return [false, $string];
        }

        $parts = explode(',', $string, 2);
        $img = $parts[0];
        $imgName = $parts[1];

        $isImg =  $img =='img' ;

        return [$isImg, $imgName];
    }

    
}

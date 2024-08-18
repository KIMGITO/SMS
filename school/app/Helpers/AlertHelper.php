<?php

use Illuminate\Support\Facades\Session;

if(! function_exists('alertHelper')){
    function alertHelper()
    {
        $alerts = ['info', 'success', 'danger', 'primary', 'secondary', 'warning', 'error'];

        $output = '';
        foreach ($alerts as $key) {
            if (Session::has($key)) {
                $output .= view('components.alert', [
                    'type' => $key,
                    'message' => Session::get($key)
                ])->render();

                Session::forget($key);
            }
        }
        
        return $output;
    }
}

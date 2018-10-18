<?php

use Jenssegers\Blade\Blade;

if (!function_exists('view')) {
    function view($view, $data = [])
    {
        $path = APPPATH.'views';
        $blade = new Blade($path, APPPATH.'cache/views');

        echo $blade->make($view, $data);
    }
}
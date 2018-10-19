<?php

if (!function_exists('assets')) {
    function assets($path)
    {
        return site_url() . 'assets/' . $path;
    }
}
<?php

if (!function_exists('debug')) {
    function debug($var)
    {
        echo "<pre>";

        print_r($var);

        die;
    }
}

if (!function_exists('e404')) {
    function e404()
    {
        echo "404 - Not found";
        die;
    }
}
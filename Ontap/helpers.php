<?php


if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";
        print_r($data);
    }
}

if (!function_exists('e404')) {
    function e404()
    {
        echo "404 - Not Found";

    }
}

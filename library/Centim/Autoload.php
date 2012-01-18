<?php

if (!function_exists('centim_autoload')) {
    function centim_autoload($class)
    {
        if (strpos($class, 'Centim') === 0) {
            $file = $class . '.php';
            require_once $file;
        }
    }

    spl_autoload_register('centim_autoload');
}

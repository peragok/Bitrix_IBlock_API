<?php

spl_autoload_register(function($class) {
    $class = ltrim($class, '\\');
    $path  = trim(str_replace(array('\\', 'IblockAPI'), array('/', ''), $class), '/');
    $file  = __DIR__ . '/lib/' . $path .'.php';
    if (is_readable($file)) {
        require_once($file);
    }
});
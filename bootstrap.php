<?php

spl_autoload_register(function ($class_name) {
    $class_file_path = str_replace('\\', '/', $class_name);
    require_once __DIR__ . '/src/' . $class_file_path . '.php';
});
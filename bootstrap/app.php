<?php

session_start();

// timezone config
date_default_timezone_set($config['timezone']);

// header config
foreach($config['header'] as $key => $value) {
    header("{$key}: {$value}");
}

// autoload core
$files = getFiles('../core/');

foreach($files as $file) {
    require_once '../core/'.$file;
}

// autoload models
$files = getFiles('../app/Models/');

foreach($files as $file) {
    require_once '../app/Models/'.$file;

    // init model
    $className = "App\\Model\\".explode('.', $file)[0];
    new $className();
}

// end

require_once "static.php";

// run the application
$app = new Core\App();

function getFiles($path) {
    return array_filter(scandir($path), function($file) {
        return strpos(strtolower($file), '.php') > 0;
    });
}
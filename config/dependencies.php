<?php
// File: /config/dependencies.php
use Jenssegers\Blade\Blade;

// Add container dependencies
$container = $app->getContainer();

// Add templates
$container['templates'] = function($c) {
    return new Blade(__DIR__  . '/../app/views', __DIR__  . '/../app/cache');
};
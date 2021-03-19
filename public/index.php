<?php
// File: /public/index.php

// Insert autoload
require __DIR__ . '/../vendor/autoload.php';

//Insert the config
require __DIR__ . '/../config/config.php';

// Set up the environment
// See ../config/config.php
$env = 'dev';
$config = $config[$env];

// Crear an instance for Slim App
$app = new Slim\App([
    'settings' => $config['settings']
]);

// Insert the routes, dependencies files, etc
// NOTE: You can delete the dependencies requirement if you want to code an API and dont need views
require __DIR__ . '/../config/dependencies.php';
require __DIR__ . '/../config/routes.php';

// Run the app
$app->run();
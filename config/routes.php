<?php
// File: /config/routes.php

// Web example
$app->get('/', '\App\controllers\WebController:index');

// Api example
$app->get('/users', '\App\controllers\ApiController:index');
<?php
// File: /app/Controllers/HolaController.php

namespace App\controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class WebController extends BaseController
{
    public function __construct($container)
    {
        parent::__construct($container);
    }

    public function index(Request $request, Response $response, $args): string
    {
        $name = $args['name'] ?? '';

        return $this->view->render('home', [
            'title' => 'Home',
            'name' => $name
        ]);
    }
}
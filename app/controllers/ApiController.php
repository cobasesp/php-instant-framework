<?php
// File: /app/Controllers/HolaController.php

namespace App\controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class ApiController extends BaseController
{
    public function __construct($container)
    {
        parent::__construct($container);
    }

    public function index(Request $request, Response $response, $args): string
    {
        $arr = [
            [
                'name' => 'Jhon',
                'age'  => 40
            ],
            [
                'name' => 'Daniel',
                'age'  => 23
            ]
        ];

        return json_encode($arr);
    }
}
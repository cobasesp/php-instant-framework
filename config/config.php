<?php

//You can make as many configs as you want by copy/paste one of them and rename its property name

$config = [
    'dev' => [
        'settings' => [
            'displayErrorDetails' => true,
            'debug'               => true,
            'whoops.editor'       => 'sublime',
        ],
        'DB' => [
            'HOST' => 'host',
            'DBNAME' => 'dbname',
            'USER' => 'dbuser',
            'PASSWD' => '1234',
        ]
    ],
    'prod' => [
        'settings' => [], //Left this empty for avoid error logs in prod
        'DB' => [
            'HOST' => 'host',
            'DBNAME' => 'dbname',
            'USER' => 'dbuser',
            'PASSWD' => '1234',
        ]
    ]
];


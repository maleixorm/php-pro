<?php

return [
    'POST' => [
        '/php-pro/public/login' => 'Login@store'
    ],
    'GET' => [
        '/php-pro/public/' => 'Home@index',
        '/php-pro/public/user/create' => 'User@create',
        '/php-pro/public/user/[a-z0-9]+' => 'User@show',
        '/php-pro/public/login' => 'Login@index'
    ]
];
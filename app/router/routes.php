<?php

return [
    '/php-pro/public/' => 'Home@index',
    '/php-pro/public/user/create' => 'User@create',
    '/php-pro/public/user/[a-z0-9]+' => 'User@index',
    '/php-pro/public/user/[a-z0-9]+/name/[a-z]+' => 'User@show'
];
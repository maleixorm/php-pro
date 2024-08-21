<?php

return [
    '/' => 'Home@index',
    '/user' => 'User@create',
    '/user/[a-z0-9]+' => 'User@index'
];
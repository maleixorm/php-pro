<?php

namespace app\controllers;

class User
{
    public function show($params)
    {
        if (!isset($params['user'])) {
            return redirect(ROOT);
        }
        $user = findBy('users', 'id', $params['user']);
        var_dump($user);
        die();
    }

    public function create()
    {
        var_dump('create');
        die();
    }
}
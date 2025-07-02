<?php

function connect() {
    return new PDO("mysql:host=localhost;dbname=php_pro;charset=utf8", 'php', '123456', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
}
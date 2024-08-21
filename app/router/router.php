<?php

function routes() {
    return require "./routes.php";
}

// Função que trabalha com as URIs exatas
function exactMatchUriInArrayRoutes($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        return [$uri => $routes[$uri]];
    }

    return [];
}

// Função que trabalha com as URIs dinâmicas
function regularExpressionMatchArrayRoutes($uri, $routes) {
    return array_filter(
        $routes,
        function($value) use($uri) {
            $regex = str_replace('/', '\/', ltrim($value, '/'));
            return preg_match("/^$regex$/", ltrim($uri, '/'));
        },
        ARRAY_FILTER_USE_KEY
    );
}

// Função que executa e verifica as rotas do projeto
function router() {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $routes = routes();
    $matchedUri = exactMatchUriInArrayRoutes($uri,$routes);
    if (empty($matchedUri)) {
        $matchedUri = regularExpressionMatchArrayRoutes($uri,$routes);
    }
}
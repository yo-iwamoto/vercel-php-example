<?php

namespace Api\Http;

use Api\Controllers\PostsController;

class Router
{
    public static function handle(string $method, string $uri)
    {
        header('Content-Type: application/json');

        if ($method === 'GET' && $uri === '/api/posts') {
            return PostsController::index();
        }

        if ($method === 'POST' && $uri === '/api/posts') {
            return PostsController::create();
        }

        self::handleNotFound();
    }

    private static function handleNotFound()
    {
        http_response_code(404);
        echo json_encode([
            'message' => 'Not found',
        ]);
    }
}

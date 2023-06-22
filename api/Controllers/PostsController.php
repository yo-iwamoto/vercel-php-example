<?php

namespace Api\Controllers;

use Api\Services\CreatePostService;
use Api\Services\IndexPostsService;

class PostsController
{
    public static function index()
    {
        $service = new IndexPostsService();
        $posts = $service->execute();

        echo json_encode([
            'posts' => $posts,
        ]);
    }

    public static function create()
    {
        $service = new CreatePostService();
        $post = $service->execute();

        echo json_encode([
            'post' => $post,
        ]);
    }
}

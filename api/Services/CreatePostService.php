<?php

namespace Api\Services;

use Api\Lib\PdoFactory;
use PDO;

class CreatePostService
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = PdoFactory::create();
    }

    public function execute()
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO posts (title)
            VALUES (:title)
            RETURNING id, title
        ");
        $title = 'Hello World!';
        $stmt->bindParam(':title', $title);
        $stmt->execute();

        $post = $stmt->fetch();

        return $post;
    }
}

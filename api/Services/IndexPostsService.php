<?php

namespace Api\Services;

use Api\Lib\PdoFactory;
use PDO;

class IndexPostsService
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = PdoFactory::create();
    }

    public function execute()
    {
        $stmt = $this->pdo->prepare("
            SELECT * FROM posts LIMIT 10
        ");
        $stmt->execute();

        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $posts;
    }
}

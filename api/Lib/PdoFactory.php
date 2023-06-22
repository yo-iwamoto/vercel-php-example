<?php

namespace Api\Lib;

use PDO;

class PdoFactory
{
    public static function create()
    {
        return new PDO(
            "pgsql:host={$_ENV['POSTGRES_HOST']};dbname={$_ENV['POSTGRES_DATABASE']};",
            $_ENV['POSTGRES_USER'],
            $_ENV['POSTGRES_PASSWORD'],
        );
    }
}

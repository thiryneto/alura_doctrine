<?php

namespace Alura\Doctrine\Helper;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
    public static function createEntityManager(): EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . "/.."],
            isDevMode: true
        );

        $connection = DriverManager::getConnection([
            'dbname' => 'doctrine',
            'user' => 'postgres',
            'password' => 'root',
            'host' => 'localhost',
            'driver' => 'pdo_pgsql',
            'port' => 5432
        ], $config);

        return new EntityManager($connection, $config);
    }
}
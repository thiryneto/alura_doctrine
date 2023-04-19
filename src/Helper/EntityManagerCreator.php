<?php

namespace Alura\Doctrine\Helper;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
    public static function createEntityManager()
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . "/src"],
            isDevMode: true
        );

        $connection = DriverManager::getConnection([
            'dbname' => 'ttivos',
            'user' => 'postgres',
            'password' => 'root',
            'host' => 'localhost',
            'driver' => 'pdo_pgsql',
        ], $config);

        $entityManager = new EntityManager($connection, $config);
    }
}
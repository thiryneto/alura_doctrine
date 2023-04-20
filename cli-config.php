<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once 'vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$commands = [];

ConsoleRunner::run(
    new \Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider($entityManager),
    $commands
);
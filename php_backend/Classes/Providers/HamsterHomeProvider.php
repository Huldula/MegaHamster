<?php

namespace HTL3R\MegaHamster\Providers;

use \Doctrine\DBAL\Configuration;

class HamsterHomeProvider {


    public static function loadAllHamsterHomes(): array {
        $connectionParams = array(
            'dbname' => 'doctrineExample',
            'user' => 'user',
            'password' => 'password',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        );
        $connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, new Configuration());

        $queryBuilder = $connection->createQueryBuilder();
        $queryBuilder
            ->select('name, general_info, image_location')
            ->from('homes');
        $stmt = $queryBuilder->execute();
        return $stmt->fetchAll();
    }
}
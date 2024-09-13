<?php
namespace Nguyen\MysqlPackage;

class Database
{
    public static function connect(string $hostname, string $username, string $password, string $dbname): ?\PDO
    {
        try {
            $dsn = "mysql:host=$hostname;dbname=$dbname;charset=utf8";
            $pdo = new \PDO($dsn, $username, $password);
            return $pdo;
        } catch (\PDOException $e) {
            print_r($e);
            error_log($e->getMessage());
            return null;
        }
    }
}
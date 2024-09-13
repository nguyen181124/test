<?php
require './vendor/autoload.php';
use Nguyen\MysqlPackage\QueryBuilder;
use Nguyen\MysqlPackage\Database;

$db = Database::connect('localhost', 'root', 'abc1234', 'BT');
print_r($db);
$result = (new QueryBuilder($db))::table('city')->select('*');
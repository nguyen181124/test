<?php
namespace Nguyen\MysqlPackage;

use Nguyen\MysqlPackage\Database;

class QueryBuilder {
    protected $query;

    protected $table;

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
        $this->query = new \stdClass();
    }

    public static function table(string $table)
    {
        return new static($table);
    }

    public function select($item)
    {
        $this->query = "SELECT ".$item." FROM ".$this->table;
        return $this;
    }

    public function execute() {
        print_r($this->db);
        // $result = $this->db->query($this->query);
        // return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
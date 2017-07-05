<?php

class QueryBuilder
{
    /** @var PDO */
    private $pdo;

    public function __construct(PDO $pdo) //this is referred to as 'type-hinting'
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
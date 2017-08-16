<?php

class QueryBuilder
{
    /** @var PDO */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {

        $keys = array_keys($parameters);

        $sql = sprintf('insert into %s (%s) values (%s)',
            $table,
            implode(',', $keys),
            ':' . implode(', :', $keys));

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die('whoops something went wrong');
        }
    }
}
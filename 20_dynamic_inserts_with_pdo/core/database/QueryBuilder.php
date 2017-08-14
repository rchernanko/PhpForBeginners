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

        $keys = array_keys($parameters); //Returns ONLY the keys of the array

        $sql = sprintf('insert into %s (%s) values (%s)',
            $table,
            implode(',', $keys), //implode converts the array keys into a comma separated string
            ':' . implode(', :', $keys));

        //Let's wrap it in a try/catch just in case an exception is thrown...

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters); //This is where the e.g. :name parameter gets bound to the insert query
        } catch (PDOException $e) {
            die('whoops something went wrong');
        }

        //The contents will now be in the database table...and as per the add-name.php...you will be redirected to the about page
    }
}
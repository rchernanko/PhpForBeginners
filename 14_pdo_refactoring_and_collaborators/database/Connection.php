<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=laracasts', 'root', '123456qwerty');
        } catch (PDOException $e) {
            die('Could not connect to the database :' . $e->getMessage());
        }
    }
}
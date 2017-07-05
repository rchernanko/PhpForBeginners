<?php

class Connection
{
    public static function make($config)
    {
        try {

            /*
             * Instead of hardcoding everything like this:
             * return new PDO('mysql:host=127.0.0.1;dbname=laracasts', 'root', '123456qwerty');
             * Use a config file like this...
             *
             */

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                    $config['username'],
                    $config['password']
            );
        } catch (PDOException $e) {
            die('Could not connect to the database :' . $e->getMessage());
        }
    }
}
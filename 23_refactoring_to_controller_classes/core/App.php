<?php

class App
{
    protected static $registry = [];

    /*
     * As I bind things in here, the $registry array starts to build up:
     *
     * $registry = [
     *      'config' = [...],
     *      'database' = $queryBuilder etc
     * ]
     *
     */

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new \Exception('No key is bound in the container');
        }

        return static::$registry[$key];
    }
}
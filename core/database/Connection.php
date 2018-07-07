<?php

class Connection
{
    public static function make($config)
    {
        try {
           return new PDO('mysql:host=localhost:3306;dbname=phptut','root','8980');

           return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['option']

           );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

<?php

    abstract class Db
    {
        private static $db;

        function __construct(){ 
            self::$db = new PDO('mysql:host=localhost;dbname=secret','root','');
            self::$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            self::$db->exec('SET NAMES utf8');
        }

        public static function getPdo()
        {
            return self::$db;
        }
    }
?>
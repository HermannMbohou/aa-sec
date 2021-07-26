<?php

    class Db
    {
        private $db;

        function __construct(){ 
            $this->db = new PDO('mysql:host=localhost;dbname=secret','root','');
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            $this->db->exec('SET NAMES utf8');
        }

        public function getPdo()
        {
            return $this->db;
        }
    }
?>
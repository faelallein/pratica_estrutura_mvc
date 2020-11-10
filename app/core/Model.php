<?php

namespace app\core;

abstract class Model {
      protected $db;

      public function __construct(){
            $this->db = new \PDO("mysql:dbname=".BANCO.";host=".SERVER,
             USER, 
             PASSWORD);
      }
}
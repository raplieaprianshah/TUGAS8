<?php

require_once "database.php";

class mie_instan{
public $db;
    function __construct(){
        $this -> db = new database();
    }
    function tampil($table){
        return $this -> db -> select($table);
    }
}
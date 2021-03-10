<?php
 session_start();
class DataBase
{
 private $dbserver = 'localhost';
 private $dbuser = 'root';
 private $dbpass = '';
 private $dbname = 'library';
     
public function connect()
    {
        $db = new mysqli($this->dbserver,$this->dbuser,$this->dbpass,$this->dbname);
        $db->set_charset("uft8");
    }
}


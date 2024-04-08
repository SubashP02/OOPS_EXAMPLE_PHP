<?php
class Db{
    private $dsn="mysql:host=localhost;dbname=test";
    private $dbusername="root";
    private $dbpass="";
   
    protected function getconnection(){
        try {
            $pdo=new PDO($this->dsn,$this->dbusername,$this->dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("error".$e->getMessage());
        }
      
    }
}
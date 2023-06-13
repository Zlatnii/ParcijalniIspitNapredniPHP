<?php

namespace App;
use PDO;
use Exception;


class Singletone
{
    // 1. Kreirati $db, $conn i konstruktor
    private $db;

    private $conn;
    //u konstruktoru uspostaviti PDO konekciju
    private function __construct($config) {
        try{
            $this->conn = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['username'], $config['password']);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected succesfuly!";

        } catch(Exception $e) {
            echo "Connection failed". $e->getMessage();
        }
     }
     //2. Ako istanca ne postoju(NULL), stvoriti novu istancu
     public function getInstance($config) //koristi se za dohvaćanje instance 
     {
        if(self::$db==NULL){
            self::$db = new Singletone($config);
        }
        //vraća jedinstveni instancu klase
        return self::$db;
     }
     
     public function getConnection() { //koristi se za dohvaćanje veze
        return $this->conn; //vraća PDO vezu u varijabli $conn
     }




    
}

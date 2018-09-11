<?php
namespace database;
use PDO;
abstract class ConectaBD {
    private static $server = "mysql:host=localhost;port=3306;dbname=sbb";
    private static $user   = "root";
    private static $pass   = "";
    private static $instance;
   
    public static function getInstance(){
        try {
            self::$instance = new PDO(self::$server, self::$user, self::$pass);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$instance;
        } catch (PDOException $exc) {
            throw new Exception($exc);
        } 
    }
    
}
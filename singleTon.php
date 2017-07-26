<?php
class database {
     
    private $dbName = null, $dbHost = null, $dbPass = null, $dbUser = null;
    private static $instance = null;
     
    private function __construct($dbDetails = array()) {
         
        // using a private constructor
 
        $this->dbName = $dbDetails['designpatterns'];
        $this->dbHost = $dbDetails['localhost'];
        $this->dbUser = $dbDetails['root'];
        $this->dbPass = $dbDetails[''];
 
        // Code to connect to database //
        $this->dbh = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbPass);
    }
     
    public static function connect($dbDetails = array()) {
         
        // Check if instance is already exists      
        if(self::$instance == null) {
            self::$instance = new database($dbDetails);
        }
         
        return self::$instance;
         
    }
     
    private function __clone() {
        // Stopping Clonning of Object
    }
     
    private function __wakeup() {
        // Stopping unserialize of object
    }
     
}
?>

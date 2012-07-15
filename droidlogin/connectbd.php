<?php
 
class DB_Connect {
 
    // constructor
    function __construct() {
 
    }
 
    // destructor
    function __destruct() {
        // $this->close();
    }
 
    // Connecting to database
    public function connect() {
        require_once 'config.php';
        // connecting to mysql
        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        // selecting database
        mysql_select_db(DB_DATABASE);
 
        // return database handler
        return $con;
    }
 
    // Closing database connection
    public function close() {
        mysql_close();
    }
 
}
 
?>

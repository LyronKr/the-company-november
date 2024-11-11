<?php

class Database {
    # Define properties
    // Public - can be accessed anywhere
    // Private - can only be accessed inside the class
    // Protected - similar private but can be accessed by the child classes
    private $server_name = "localhost";
    private $username = "root";
    private $password = ""; //for mac users password is "root";
    private $db_name = "the_company_pm";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
        
        if($this->conn->connect_error){
            die('Unable to connect to the database: ' . $this->conn->connect_error);
        }
    }
}
?>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "project";

class main_class {
    private $conn;

    public function __construct($hostname, $username, $password, $database) {
        $this->conn = new mysqli($hostname, $username, $password);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
        if (!$this->conn->select_db($database)) {
            die("Database selection failed: " . $this->conn->error);
        }
    }

    public function getQuery($sql, $type) {
        $result = $this->conn->query($sql);
        if (!$result) {
            die("Query failed: " . $this->conn->error);
        }
        $data = [];
        if ($type == 1) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}

$obj = new main_class($hostname, $username, $password, $database);
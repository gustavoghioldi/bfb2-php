<?php

class DBConnection {
    private $host = "localhost";
    private $user = "root"; 
    private $password = "";
    private $database = "bfb";

    public function connect() {
        $connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }
}

// $conn = new DBConnection();
// $conn_live = $conn->connect();
// $conn_live->query("INSERT INTO nomina (first_name, last_name, doc_id, salary) VALUES ('Juan', 'Perez', '123456', '1000')");
// $conn_live->close();
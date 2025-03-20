<?php

abstract class UserModel {

    public function __construct($first_name, $last_name, $doc_id) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->doc_id = $doc_id;
    }

    // private $connection;

    // public function __construct() {
    //     $this->connection = new DBConnection();
    // }

    // public function createUser($user) {
    //     $connection = $this->connection->connect();
    //     $sql = "INSERT INTO users (name, email, password) VALUES ('" . $user->getName() . "', '" . $user->getEmail() . "', '" . $user->getPassword() . "')";
    //     if ($connection->query($sql) === TRUE) {
    //         echo "New record created successfully";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $connection->error;
    //     }
    //     $connection->close();
    // }

    // public function getUsers() {
    //     $connection = $this->connection->connect();
    //     $sql = "SELECT * FROM users";
    //     $result = $connection->query($sql);
    //     $users = array();
    //     if ($result->num_rows > 0) {
    //         while($row = $result->fetch_assoc()) {
    //             $user = new User($row["name"], $row["email"], $row["password"]);
    //             array_push($users, $user);
    //         }
    //     }
    //     $connection->close();
    //     return $users;
    // }
}
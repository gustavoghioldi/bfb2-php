<?php

interface EmployeeInterface {
    public function setID();
    public function getID();
}

class User {
    protected $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

class Employee extends User implements EmployeeInterface {
    private $salary;
    private $id;

    public function __construct($name, $email, $password, $salary) {
        parent::__construct($name, $email, $password);
        $this->salary = $salary;
    }

    public function getName() {
        return "Empleado: ".$this->name; //funciona porque $name es protected 
        // return "Empleado: ".parent::getName(); // cuando $name es privado y debo acceder por gettter y setters
    }
    public function getSalary() {
        return $this->salary;
    }

    public function setID() {
        $this->id = uniqid();
    }

    public function getID() {
        return $this->id;
    }
}
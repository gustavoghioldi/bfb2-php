<?php
require_once 'connection_db.php';
require_once 'irepository.php';

class EmployeeRepository implements IRepository {

    public function __construct($employee) {
        $this->connection = new DBConnection();
        $this->employee = $employee;
    }

    public function create() {
        $connection = $this->connection->connect();
        $sql = "INSERT INTO nomina (first_name, last_name, doc_id, salary) VALUES ('" . $this->employee->first_name . "', '" . $this->employee->last_name . "', '" . $this->employee->doc_id . "', '" . $this->employee->salary . "')";
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }

    public function update($employee) { 
        return "update";
    }

    public function read($id=null) {
        $connection = $this->connection->connect();
        $sql = "SELECT * FROM nomina";
        $result = $connection->query($sql);
        // genero un array vacio
        $employees = array();
        // si hay mas de 0 registros
        if ($result->num_rows > 0) {
            // recorro los registros
            // creo un objeto EmployeeModel con los datos de la fila
            while($row = $result->fetch_assoc()) {
                $employee = new EmployeeModel($row["first_name"], $row["last_name"], $row["doc_id"], $row["salary"]);
                // agrego el objeto al array
                array_push($employees, $employee);
            }
        }
        $connection->close();
        return $employees;   

    }

    public function delete() {
        $connection = $this->connection->connect();
        $sql = "DELETE FROM nomina WHERE doc_id = '" . $this->employee->doc_id . "'";
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }

}
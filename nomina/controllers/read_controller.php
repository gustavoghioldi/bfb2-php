<?php 
require_once '../models/employee_model.php';
require_once '../models/repository/employee_repository.php';

function read() {
    $e = new EmployeeModel("gus", "ghi", "123", 1220.33);
    $er = new EmployeeRepository($e);
    $result = $er->read();
    return $result;
}
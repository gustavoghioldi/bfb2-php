<?php 
require_once '../models/employee_model.php';
require_once '../models/repository/employee_repository.php';

function read() {
    $e = new EmployeeModel(null, null, null, null);
    $er = new EmployeeRepository($e);
    $result = $er->read();
    return $result;
}
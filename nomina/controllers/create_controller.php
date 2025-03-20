<?php
require_once '../models/employee_model.php';
require_once '../models/repository/employee_repository.php';

function create($first_name, $last_name, $doc_id, $salary) {

    $employee = new EmployeeModel($first_name, $last_name, $doc_id, $salary);
    $employee_repository = new EmployeeRepository($employee);
    $result = $employee_repository->create();
    return $result;
}
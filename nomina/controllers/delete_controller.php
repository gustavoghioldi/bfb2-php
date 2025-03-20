<?php
require_once '../models/employee_model.php';
require_once '../models/repository/employee_repository.php';

function delete($doc_id) {
    $employee = new EmployeeModel('', '', $doc_id, 0);
    $employee_repository = new EmployeeRepository($employee);
    $result = $employee_repository->delete();
    return $result;
}
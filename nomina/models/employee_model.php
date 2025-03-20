<?php
require_once 'user_model.php';

class EmployeeModel extends UserModel { 

    public function __construct($first_name, $last_name, $doc_id, $salary) {
        parent::__construct($first_name, $last_name, $doc_id);
        $this->salary = $salary;
    }
}
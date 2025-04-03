<?php

abstract class UserModel {

    public function __construct($first_name, $last_name, $doc_id) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->doc_id = $doc_id;
    }
}
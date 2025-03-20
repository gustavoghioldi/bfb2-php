<?php

interface IRepository {
    public function create();
    public function update($user);
    public function read($id);
    public function delete();
}
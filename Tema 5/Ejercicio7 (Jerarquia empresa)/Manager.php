<?php
require_once 'Employee.php';
class Manager extends Employee
{
    protected int $teamSize;

    public function __construct(string $name, string $role, $teamSize) {
        parent::__construct($name);
    }
}
?>
<?php
class Employee
{
    protected string $name;
    protected string $role;
    
	public function __construct(string $name, string $role) {

		$this->name = $name;
		$this->role = $role;
	}

	    public function getRoleDescription() : string {
        return "This is a general employee.";
    }

	public function getName() : string {
		return $this->name;
	}

	public function setName(string $value) {
		$this->name = $value;
	}

	public function getRole() : string {
		return $this->role;
	}

	public function setRole(string $value) {
		$this->role = $value;
	}
}
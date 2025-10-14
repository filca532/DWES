<?php
class Project
{
    public function __construct(
        private int $id,
        private string $name,
        private string $status = "Pending"
    ) {

    }

    public function getID(): int {
        return $this -> id;
    }

    public function getName(): string {
        return $this -> name;
    }

    public function getStatus(): string {
        return $this -> status;
    }

    public function setStatus(string $status): void {
        $this -> status = $status;
    }
    
    public function __tostring(): string
    {
        return "({$this->id}, {$this->name}, {$this->status})";
    }
}
?>
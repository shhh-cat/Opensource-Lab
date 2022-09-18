<?php

require_once("Person.php");
class Employee extends Person {
    private $employeeID;
    private $department;

    public function __construct($employeeName, $nationID, $department)
    {
        parent::__construct($employeeName,$nationID);
        $this->department = $department;
        $this->employeeID = Employee::generateEmployeeId();
    }

    public function __destruct()
    {
        $this->name = null;
        $this->id = null;
    }

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function setDepartment($dept)
    {
        $this->department = $dept;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    private static function generateEmployeeId() {
        static $IDGen = 1;
        return $IDGen++;
    }

}
<?php
class Employee extends Person{
    private float $_salary;

    /**
     * @param string $name name of the employee U create
     * @param string $firstname // firstname of the employee U create
     * @param int $age // age of the employee U creat
     * @param float $salary // salary per year of the employee U creat ( be generous please ;) )
     */
    public function __construct($name, $firstname, $age,$salary)
    {
        parent::__construct($name, $firstname, $age);
        $this->_salary=$salary;
    }
    /**
     * @return float salary of the employee
     */
    public function getSalary(){
        return $this->_salary;
    }
}
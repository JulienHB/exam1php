<?php
class Person{
    private string $_name;
    private string $_firstname;
    private int $_age;

    /**
     * @param string $name name of the person U create
     * @param string $firstname // firstname of the person U create
     * @param int $age // age of the person U creat
     */
    public function __construct($name, $firstname, $age)
    {
        $this->_name=strtolower($name);
        $this->_firstname=strtolower($firstname);
        $this->_age=$age;
    }

    /**
     * @return string return the name of the person
     */
    public function getName(){
        return $this->_name;
    }

    /**
     * @param string set $name as $_name of the person
     */
    public function setName($name){
        $this->_name=$name;
    }

    /**
     * @return string return the firstname of the person
     */
    public function getFirstname(){
        return $this->_firstname;
    }

    /**
     * @param string set $firstname as $_firstname of the person
     */
    public function setFirstname($firstname){
        $this->_firstname=$firstname;
    }

    /**
     * @return int return age of the person
     */
    public function getAge(){
        return $this->_age;
    }

    /**
     * @param int set $age as $_age of the person
     */
    public function setAge($age){
        $this->_age=$age;
    }
    public function getYearOfBirth(){
        $currentDate=2021;
        $yearOfBirth = $currentDate-($this->_age);
        return $yearOfBirth;
    }
}
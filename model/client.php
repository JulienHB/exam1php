<?php
class Client extends Person{
    private string $_entrepriseName;

    /**
     *  * @param string $name name of the Client U create
     * @param string $firstname // firstname of the Client U create
     * @param int $age // age of the Client U creat
     * @param string $entrepriseName // name of the enterprise of the client
     */
    public function __construct($name, $firstname, $age, $entrepriseName)
    {
        parent::__construct($name, $firstname, $age);
        $this->_entrepriseName=$entrepriseName;
    }

    /**
     * @return string The name of the enterprise of the Client
     */
    public function getEntrepriseName(){
        return $this->_entrepriseName;
    }
}
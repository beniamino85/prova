<?php
/**
 * Created by PhpStorm.
 * User: beniamino
 * Date: 6/4/18
 * Time: 12:57 PM
 */

class User
{

    private $firstname;
    private $lastname;
    private $username;
    private $password;

    /**
     * User constructor.
     * @param $firstname
     * @param $lastname
     * @param $username
     * @param $password
     */
    public function __construct($firstname, $lastname, $username, $password)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->password = $password;
    }

    public function jsonSerialize() {
        $vars = get_object_vars($this);
        return $vars;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}
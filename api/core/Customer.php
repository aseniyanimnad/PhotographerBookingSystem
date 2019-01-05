<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:03 PM
 */

class Customer
{
    private $CID;
    private $CName;
    private $Phone;
    private $Email;
    private $Address;

    /**
     * Customer constructor.
     * @param $CID
     * @param $CName
     * @param $Phone
     * @param $Email
     * @param $Address
     */
    public function __construct($CID, $CName, $Phone, $Email, $Address)
    {
        $this->CID = $CID;
        $this->CName = $CName;
        $this->Phone = $Phone;
        $this->Email = $Email;
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getCID()
    {
        return $this->CID;
    }

    /**
     * @param mixed $CID
     */
    public function setCID($CID)
    {
        $this->CID = $CID;
    }

    /**
     * @return mixed
     */
    public function getCName()
    {
        return $this->CName;
    }

    /**
     * @param mixed $CName
     */
    public function setCName($CName)
    {
        $this->CName = $CName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }




}
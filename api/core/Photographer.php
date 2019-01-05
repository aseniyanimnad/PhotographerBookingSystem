<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:15 PM
 */

class Photographer
{
    private $PID;
    private $PName;
    private $PContact;
    private $PEmail;
    private $PAddress;

    /**
     * Photographer constructor.
     * @param $PID
     * @param $PName
     * @param $PContact
     * @param $PEmail
     * @param $PAddress
     */
    public function __construct($PID, $PName, $PContact, $PEmail, $PAddress)
    {
        $this->PID = $PID;
        $this->PName = $PName;
        $this->PContact = $PContact;
        $this->PEmail = $PEmail;
        $this->PAddress = $PAddress;
    }

    /**
     * @return mixed
     */
    public function getPID()
    {
        return $this->PID;
    }

    /**
     * @param mixed $PID
     */
    public function setPID($PID)
    {
        $this->PID = $PID;
    }

    /**
     * @return mixed
     */
    public function getPName()
    {
        return $this->PName;
    }

    /**
     * @param mixed $PName
     */
    public function setPName($PName)
    {
        $this->PName = $PName;
    }

    /**
     * @return mixed
     */
    public function getPContact()
    {
        return $this->PContact;
    }

    /**
     * @param mixed $PContact
     */
    public function setPContact($PContact)
    {
        $this->PContact = $PContact;
    }

    /**
     * @return mixed
     */
    public function getPEmail()
    {
        return $this->PEmail;
    }

    /**
     * @param mixed $PEmail
     */
    public function setPEmail($PEmail)
    {
        $this->PEmail = $PEmail;
    }

    /**
     * @return mixed
     */
    public function getPAddress()
    {
        return $this->PAddress;
    }

    /**
     * @param mixed $PAddress
     */
    public function setPAddress($PAddress)
    {
        $this->PAddress = $PAddress;
    }



}
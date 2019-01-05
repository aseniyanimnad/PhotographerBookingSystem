<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:07 PM
 */

class Category
{
    private $CatID;
    private $CatName;
    private $CatDesc;
    private $Pacage;
    private $Price;

    /**
     * Category constructor.
     * @param $CatID
     * @param $CatName
     * @param $CatDesc
     * @param $Pacage
     * @param $Price
     */
    public function __construct($CatID, $CatName, $CatDesc, $Pacage, $Price)
    {
        $this->CatID = $CatID;
        $this->CatName = $CatName;
        $this->CatDesc = $CatDesc;
        $this->Pacage = $Pacage;
        $this->Price = $Price;
    }

    /**
     * @return mixed
     */
    public function getCatID()
    {
        return $this->CatID;
    }

    /**
     * @param mixed $CatID
     */
    public function setCatID($CatID)
    {
        $this->CatID = $CatID;
    }

    /**
     * @return mixed
     */
    public function getCatName()
    {
        return $this->CatName;
    }

    /**
     * @param mixed $CatName
     */
    public function setCatName($CatName)
    {
        $this->CatName = $CatName;
    }

    /**
     * @return mixed
     */
    public function getCatDesc()
    {
        return $this->CatDesc;
    }

    /**
     * @param mixed $CatDesc
     */
    public function setCatDesc($CatDesc)
    {
        $this->CatDesc = $CatDesc;
    }

    /**
     * @return mixed
     */
    public function getPacage()
    {
        return $this->Pacage;
    }

    /**
     * @param mixed $Pacage
     */
    public function setPacage($Pacage)
    {
        $this->Pacage = $Pacage;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param mixed $Price
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
    }


}
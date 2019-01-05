<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:13 PM
 */

class WeddingPacage
{
    private $WpID;
    private $WpName;
    private $WpPrice;

    /**
     * WeddingPacage constructor.
     * @param $WpID
     * @param $WpName
     * @param $WpPrice
     */
    public function __construct($WpID, $WpName, $WpPrice)
    {
        $this->WpID = $WpID;
        $this->WpName = $WpName;
        $this->WpPrice = $WpPrice;
    }

    /**
     * @return mixed
     */
    public function getWpID()
    {
        return $this->WpID;
    }

    /**
     * @param mixed $WpID
     */
    public function setWpID($WpID)
    {
        $this->WpID = $WpID;
    }

    /**
     * @return mixed
     */
    public function getWpName()
    {
        return $this->WpName;
    }

    /**
     * @param mixed $WpName
     */
    public function setWpName($WpName)
    {
        $this->WpName = $WpName;
    }

    /**
     * @return mixed
     */
    public function getWpPrice()
    {
        return $this->WpPrice;
    }

    /**
     * @param mixed $WpPrice
     */
    public function setWpPrice($WpPrice)
    {
        $this->WpPrice = $WpPrice;
    }


}
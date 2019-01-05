<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/7/2018
 * Time: 1:27 PM
 */

class Booking
{
    private $bid;
    private $cid;
    private $CatID;
    private $PID;

    /**
     * Booking constructor.
     * @param $bid
     * @param $cid
     * @param $CatID
     * @param $PID
     */
    public function __construct($bid, $cid, $CatID, $PID)
    {
        $this->bid = $bid;
        $this->cid = $cid;
        $this->CatID = $CatID;
        $this->PID = $PID;
    }

    /**
     * @return mixed
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param mixed $bid
     */
    public function setBid($bid): void
    {
        $this->bid = $bid;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid): void
    {
        $this->cid = $cid;
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
    public function setCatID($CatID): void
    {
        $this->CatID = $CatID;
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
    public function setPID($PID): void
    {
        $this->PID = $PID;
    }



}
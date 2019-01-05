<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/7/2018
 * Time: 2:07 PM
 */

require_once __DIR__."/../BookingRepo.php";
require_once __DIR__."/../../core/Booking.php";


class BookingRepoImpl implements BookingRepo
{

    private $connection;

    /**
     * BookingRepoImpl constructor.
     */
    public function __construct()
    {
        $connection=(new DBConnection())->getDBConnection();
        $this->connection=$connection;
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addBooking(Booking $booking): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO Booking VALUES(
                '{$booking->getBid()}',
                '{$booking->getCid()}',
                '{$booking->getCatID()}',
                '{$booking->getPID()}'
                )");
        return ($resp);
    }

    public function getAllBooking(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM Booking");
        return $resultset->fetch_all();
    }
}
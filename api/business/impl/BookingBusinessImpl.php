<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/7/2018
 * Time: 2:16 PM
 */

require_once __DIR__."/../BookingBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Booking.php";
require_once __DIR__."/../../repo/BookingRepo.php";

class BookingBusinessImpl implements BookingBusiness
{

    public function addBooking(Booking $booking): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $bookingRepo = new BookingRepoImpl();
        $bookingRepo->setConnection($connection);
        return $bookingRepo->addBooking($booking);
    }

    public function getAllBooking(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $bookingRepo = new BookingRepoImpl();
        $bookingRepo->setConnection($connection);
        return $bookingRepo->getAllBooking();
    }
}
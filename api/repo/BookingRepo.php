<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/7/2018
 * Time: 2:02 PM
 */

require_once __DIR__."/../core/Booking.php";

interface BookingRepo
{
    public function setConnection(mysqli $connection): void;

    public function addBooking(Booking $booking): bool;

    public function getAllBooking(): array;
}
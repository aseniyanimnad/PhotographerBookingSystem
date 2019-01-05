<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/7/2018
 * Time: 1:57 PM
 */

require_once __DIR__."/../core/Booking.php";

interface BookingBusiness
{
    public function addBooking(Booking $booking): bool;

    public function getAllBooking(): array;
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/7/2018
 * Time: 3:31 PM
 */

require_once __DIR__."/../business/impl/BookingBusinessImpl.php";
require_once __DIR__."/../core/Booking.php";
require_once __DIR__."/../repo/impl/BookingRepoImpl.php";

$bookingBO = new BookingBusinessImpl();

$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "GET":
        echo json_decode($bookingBO->getAllBooking());
        break;
    case "POST":
        $bid = 0;
        $customer = $_POST['customerID'];
        $category = $_POST["categoryID"];
        $photographer = $_POST['photographerID'];

         var_dump($bid,$customer,$photographer);

        $tempBooking = new Booking($bid,$customer,$category,$photographer);
        $resp = $bookingBO->addBooking($tempBooking);
        if ($resp) {
            echo "Added";
        } else {
            echo "Unsuccessfull";
        }

        break;

}
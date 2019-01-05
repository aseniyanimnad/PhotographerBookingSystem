<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 3:28 PM
 */
require_once __DIR__."/../business/impl/CustomerBusinessImpl.php";
require_once __DIR__."/../core/Customer.php";


$customerBO = new CustomerBusinessImpl();
//$operation = $_GET["operation"];

$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "GET":
        echo json_encode($customerBO->getAllCustomer());
        break;
    case "POST":
        $cid = 0;
        $cname = $_POST['name'];
        $Phone = $_POST["contact"];
        $Email = $_POST['email'];
        $Address = $_POST['address'];


        $tempCustomer = new Customer($cid, $cname, $Phone, $Email, $Address);
        $resp = $customerBO->addCustomer($tempCustomer);
        if ($resp) {
            echo "Added";
        } else {
            echo "Unsuccessfull";
        }

        break;

}
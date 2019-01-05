<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/8/2018
 * Time: 2:50 AM
 */
require_once __DIR__."/../business/impl/PhotographerBusinessImpl.php";
require_once __DIR__."/../core/Photographer.php";


$photographerBO = new PhotographerBusinessImpl();
//$operation = $_GET["operation"];

$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "GET":
        echo json_encode($photographerBO->getAllPhotographer());
        break;
    case "POST":
        $PID = 0;
        $PName = $_POST['pName'];
        $PContact = $_POST["pContact"];
        $PEmail = $_POST['pEmail'];
        $PAddress = $_POST['pAddress'];


        $tempPhotographer = new Photographer($PID,$PName,$PContact,$PEmail,$PAddress);
        $resp = $photographerBO->addPhotographer($tempPhotographer);
        if ($resp) {
            echo "Added";
        } else {
            echo "Unsuccessfull";
        }

        break;

}
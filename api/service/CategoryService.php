<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/8/2018
 * Time: 2:38 AM
 */
require_once __DIR__."/../business/impl/CategoryBusinessImpl.php";
require_once __DIR__."/../core/Category.php";


$categoryBO = new CategoryBusinessImpl();
//$operation = $_GET["operation"];

$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "GET":
        echo json_encode($categoryBO->getAllCategory());
        break;
    case "POST":
        $CatID = 0;
        $CatName = $_POST['name'];
        $CatDesc = $_POST["description"];
        $Pacage = $_POST['pacage'];
        $Price = $_POST['price'];


        $tempCategory = new Category($CatID,$CatName,$CatDesc,$Pacage,$Price);
        $resp = $categoryBO->addCategory($tempCategory);
        if ($resp) {
            echo "Added";
        } else {
            echo "Unsuccessfull";
        }

        break;

}
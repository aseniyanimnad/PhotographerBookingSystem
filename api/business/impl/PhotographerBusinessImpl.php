<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 3:10 PM
 */

require_once __DIR__."/../PhotographerBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Photographer.php";
require_once __DIR__."/../../repo/impl/PhotographerRepoImpl.php";

class PhotographerBusinessImpl implements PhotographerBusiness
{

    public function addPhotographer(Photographer $photographer): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $photographerRepo = new PhotographerRepoImpl();
        $photographerRepo->setConnection($connection);
        return $photographerRepo->addPhotographer($photographer);
    }

    public function deletePhotographer(string $pid): bool
    {
        // TODO: Implement deletePhotographer() method.
    }

    public function searchPhotographer(string $pid): array
    {
        // TODO: Implement searchPhotographer() method.
    }

    public function updatePhotographer(Photographer $photographer): bool
    {
        // TODO: Implement updatePhotographer() method.
    }

    public function getAllPhotographer(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $photographerRepo = new PhotographerRepoImpl();
        $photographerRepo->setConnection($connection);
        return $photographerRepo->getAllPhotographer();
    }
}
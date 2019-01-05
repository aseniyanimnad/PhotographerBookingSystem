<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 2:16 PM
 */

require_once __DIR__."/../PhotographerRepo.php";
require_once __DIR__."/../../core/Photographer.php";


class PhotographerRepoImpl implements PhotographerRepo
{
    private $connection;

    /**
     * PhotographerRepoImpl constructor.
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

    public function addPhotographer(Photographer $photographer): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO Photographer VALUES(
                '{$photographer->getPID()}',
                '{$photographer->getPName()}',
                '{$photographer->getPContact()}',
                '{$photographer->getPEmail()}',
                '{$photographer->getPAddress()}'
                )");
        return ($resp);
    }

    public function deletePhotographer(string $pid): bool
    {

    }

    public function searchPhotographer(string $pid): array
    {

    }

    public function updatePhotographer(Photographer $photographer): bool
    {

    }

    public function getAllPhotographer(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM Photographer");
        return $resultset->fetch_all();
    }
}
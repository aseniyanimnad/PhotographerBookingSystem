<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 2:37 PM
 */

require_once __DIR__."/../WeddingPacageRepo.php";
require_once __DIR__."/../../core/WeddingPacage.php";

class WeddingPacageRepoImpl implements WeddingPacageRepo
{
    private $connection;

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addWeddingPacage(WeddingPacage $weddingPacage): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO WeddingPacage VALUES(
                '{$weddingPacage->getWpID()}',
                '{$weddingPacage->getWpName()}',
                {$weddingPacage->getWpPrice()}
                )");
        return ($resp>0);
    }

    public function deleteWeddingPacage(string $wpid): bool
    {

    }

    public function searchWeddingPacage(string $wpid): array
    {

    }

    public function updateWeddingPacage(WeddingPacage $weddingPacage): bool
    {

    }

    public function getAllWeddingPacage(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM WeddingPacage");
        return $resultset->fetch_all();
    }
}
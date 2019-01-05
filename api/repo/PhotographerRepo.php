<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:52 PM
 */

require_once __DIR__."/../core/Photographer.php";

interface PhotographerRepo
{
    public function setConnection(mysqli $connection): void;

    public function addPhotographer(Photographer $photographer): bool;

    public function deletePhotographer(string $pid): bool;

    public function searchPhotographer(string $pid): array;

    public function updatePhotographer(Photographer $photographer): bool;

    public function getAllPhotographer(): array;

}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:35 PM
 */

require_once __DIR__."/../core/WeddingPacage.php";

interface WeddingPacageBusiness
{
    public function addWeddingPacage(WeddingPacage $weddingPacage): bool;
    public function deleteWeddingPacage(string $wpid): bool;
    public function searchWeddingPacage(string $wpid): array;
    public function updateWeddingPacage(WeddingPacage $weddingPacage):bool;
    public function getAllWeddingPacage(): array;
}
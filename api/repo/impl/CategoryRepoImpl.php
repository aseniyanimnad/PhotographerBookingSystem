<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 2:27 PM
 */

require_once __DIR__."/../CategoryRepo.php";
require_once __DIR__."/../../core/Category.php";

class CategoryRepoImpl implements CategoryRepo
{
    private $connection;

    /**
     * CategoryRepoImpl constructor.
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

    public function addCategory(Category $category): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO Category VALUES(
                '{$category->getCatID()}',
                '{$category->getCatName()}',
                '{$category->getCatDesc()}',
                '{$category->getPacage()}',
                '{$category->getPrice()}'
                )");
        return ($resp);
    }

    public function deleteCategory(string $catid): bool
    {

    }

    public function searchCategory(string $catid): array
    {

    }

    public function updateCategory(Category $category): bool
    {

    }

    public function getAllCategory(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM Category");
        return $resultset->fetch_all();
    }
}
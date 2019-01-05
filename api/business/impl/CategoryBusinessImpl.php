<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 2:47 PM
 */

require_once __DIR__."/../CategoryBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Category.php";
require_once __DIR__."/../../repo/impl/CategoryRepoImpl.php";

class CategoryBusinessImpl implements CategoryBusiness
{

    public function addCategory(Category $category): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $categoryRepo = new CategoryRepoImpl();
        $categoryRepo->setConnection($connection);
        return $categoryRepo->addCategory($category);
    }

    public function deleteCategory(string $catid): bool
    {
        // TODO: Implement deleteCategory() method.
    }

    public function searchCategory(string $catid): array
    {
        // TODO: Implement searchCategory() method.
    }

    public function updateCategory(Category $category): bool
    {
        // TODO: Implement updateCategory() method.
    }

    public function getAllCategory(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $categoryRepo = new CategoryRepoImpl();
        $categoryRepo->setConnection($connection);
        return $categoryRepo->getAllCategory();
    }
}
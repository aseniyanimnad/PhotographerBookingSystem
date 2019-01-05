<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:26 PM
 */

require_once __DIR__."/../core/Category.php";

interface CategoryBusiness
{
    public function addCategory(Category $category): bool;
    public function deleteCategory(string $catid): bool;
    public function searchCategory(string $catid): array;
    public function updateCategory(Category $category):bool;
    public function getAllCategory(): array;

}

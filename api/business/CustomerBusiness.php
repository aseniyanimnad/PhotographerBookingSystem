<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:18 PM
 */

require_once __DIR__."/../core/Customer.php";

interface CustomerBusiness
{
    public function addCustomer(Customer $customer): bool;
    public function deleteCustomer(string $cid): bool;
    public function searchCustomer(string $cid): array;
    public function updateCustomer(Customer $customer):bool;
    public function getAllCustomer(): array;

}
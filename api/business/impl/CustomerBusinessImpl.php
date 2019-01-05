<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:38 PM
 */

require_once __DIR__."/../CustomerBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Customer.php";
require_once __DIR__."/../../repo/impl/CustomerRepoImpl.php";

class CustomerBusinessImpl implements CustomerBusiness
{

    public function addCustomer(Customer $customer): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->addCustomer($customer);
    }

    public function deleteCustomer(string $cid): bool
    {
        // TODO: Implement deleteCustomer() method.
    }

    public function searchCustomer(string $cid): array
    {
        // TODO: Implement searchCustomer() method.
    }

    public function updateCustomer(Customer $customer): bool
    {
        // TODO: Implement updateCustomer() method.
    }

    public function getAllCustomer(): array
    {

        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->getAllCustomers();

    }
}
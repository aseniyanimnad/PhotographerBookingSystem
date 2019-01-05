<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/6/2018
 * Time: 1:57 PM
 */

require_once __DIR__."/../CustomerRepo.php";
require_once __DIR__."/../../core/Customer.php";

class CustomerRepoImpl implements CustomerRepo
{

    private $connection;

    /**
     * CustomerRepoImpl constructor.
     */
    public function __construct()
    {
        $connection=(new DBConnection())->getDBConnection();
        $this->connection=$connection;
    }

    /**
     * CustomerRepoImpl constructor.
     * @param $connection
     */



    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addCustomer(Customer $customer): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO Customer VALUES(
                '{$customer->getCID()}',
                '{$customer->getCName()}',
                '{$customer->getPhone()}',
                '{$customer->getEmail()}',
                '{$customer->getAddress()}'
                )");
        return ($resp);
    }

    public function deleteCustomer(string $cid): bool
    {

    }

    public function searchCustomer(string $cid): array
    {

    }

    public function updateCustomer(Customer $customer): bool
    {

    }

    public function getAllCustomers(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM Customer");
        return $resultset->fetch_all();
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/5/2018
 * Time: 10:53 PM
 */

class DBConnection
{
    private $host="127.0.0.1";
    private $userName="root";
    private $password="aseniya";
    private $database="onlinephotography";
    private $port="3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection=new mysqli($this->host,$this->userName,$this->password,$this->database,$this->port);
    }

    public function getDBConnection(){
        return $this->connection;
    }


}

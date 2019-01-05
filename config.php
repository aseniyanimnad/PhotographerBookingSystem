<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12/7/2018
 * Time: 2:59 PM
 */
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'aseniya');
define('DB_NAME','onlinephotography');
define('DB_PORT','3306');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME,DB_PORT);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
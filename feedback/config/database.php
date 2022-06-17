<?php
//PDO PHP Data Objects
//constants
define('DB_HOST','localhost');
define('DB_USER','bretton');
define('DB_PASS','aiGURU@2020#brett');
define('DB_NAME','php_dev');


//create connection
$conn = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);

//check connection
if($conn->connect_error){
    die('Connection Failed '. $conn->connetc_error);
}


?>
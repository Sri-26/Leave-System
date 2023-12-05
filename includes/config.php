<?php

define('DB_HOST','elmdb.mysql.database.azure.com');
define('DB_USER','charan');
define('DB_PASS','password@123');
define('DB_NAME','aci_leave');

$conn = mysqli_connect('elmdb.mysql.database.azure.com','charan','password@123','aci_leave') or die(mysqli_error());

// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>

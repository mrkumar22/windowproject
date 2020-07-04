<?php 

// Using Medoo namespace
require 'Medoo.php';
use Medoo\Medoo;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wpproject";
 
$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => $dbname,
	'server' => $servername,
	'username' => $username ,
	'password' => $password
]);

define ('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/realestate/');
?>

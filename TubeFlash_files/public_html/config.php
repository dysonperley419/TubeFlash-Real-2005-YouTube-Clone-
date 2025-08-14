<?php
/* Database credentials. */
define('DB_SERVER', 'mysql2.serv00.com');
define('DB_USERNAME', 'm11265_dexptuba3');
define('DB_PASSWORD', 'Dysonp2013');
define('DB_NAME', 'm11265_2005tube');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

<?php
//Connect to MySQL
//$con = mysqli_connect("localhost","root",'',"shoutit");

//Remote database connection
require_once 'config.php';
$con = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

if (!$con) {
    die("Connection failed: ". myqli_connect_error());
} 

//Test
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
?>
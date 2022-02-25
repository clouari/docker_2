<?php

session_start();

$mysql_hostname = 'host.docker.internal';
$mysql_username = 'Jung';
$mysql_password = 'dahui';
$mysql_database = 'myDB';
$mysql_port = '52000';
$mysql_charset = 'UTF8';
$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);
if($conn->connect_errno){
    echo 'error : '.$conn->connect_error.'';
}

?>
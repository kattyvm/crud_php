<?php

session_start();

$host="34.71.71.133";
$port=3306;
$socket="";
$user="root";
$password="katty123";
$dbname="test";

//$host=getenv('MYSQL_HOST');
//$user=getenv('MYSQL_DB');
//$password=getenv('MYSQL_USER');
//$dbname=getenv('MYSQL_PASS');
//$port=getenv('MYSQL_PORT');

$con = new mysqli($host, $user, $password, $dbname, $port, $socket) 
		or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

?>
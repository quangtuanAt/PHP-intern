<?php 
$host = "localhost";
$port = "5433";
$dbname = "internPHP";
$user = "postgres";
$password = "123456"; 
// $password = "quangtuan123$"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);     
?>
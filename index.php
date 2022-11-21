<?php 

$host= 'db';
$db = 'php-latest';
$user = 'postgres';
$password = 'postgres';

$dsn = "pgsql:host=$host;port=5432;dbname=$db;";

try{
    $connection = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $exc){
    echo "<p style='color:red'> {$exc->getMessage()} </p>";
    exit(1);
}

var_dump($connection);

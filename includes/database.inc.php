<?php

$dsn = "mysql:host=localhost;dbname=wissensportal_system;";
$username = "wissensportal_system";
$password = "brckEsTlpx";

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Es liegt ein Problem bei der Datenbankverbindung vor: ' . "<br/><br/>";
    echo "<pre>" . var_dump($e) . "</pre>";
}
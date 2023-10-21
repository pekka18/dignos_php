<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pointofsale';

try {
    $database = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    
}
?>
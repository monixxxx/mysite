<?php
$host = 'localhost';
$dbname = 'ads_dbs';
$username = 'adsadmin';
$password = 'admin555';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Error connecting to the database: " . $e->getMessage());
}
?>

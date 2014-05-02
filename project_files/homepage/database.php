<?php
$dsn = 'mysql:host=localhost;dbname=pt_connect';
$username = 'username';
$password = 'password';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../homepage/database_error.php');
    exit();
}
?>
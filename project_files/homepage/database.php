<?php
$dsn = 'mysql:host=localhost;dbname=pt_connect';
$username = 'ts_user';
$password = 'pa55word';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../homepage/database_error.php');
    exit();
}
?>
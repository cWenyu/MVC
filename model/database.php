<?php
    $dsn = 'mysql:host=localhost;dbname=D00198805';
    $username = 'D00198805';
    $password = 'TtRLdxAS';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
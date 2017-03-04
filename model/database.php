<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=pk462';
    $username='pk462';
    $password='macBook2016';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>

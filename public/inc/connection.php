<?php

$dsn = 'mysql:host=' . $host . ';dbname=' . $database;


try {
    $db = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (PDOException $e) {
    echo '<p>connection failed';

    if (ini_get('display_errors')) {
        echo '<br>' . $e->getMessage();
    }

    exit;
}

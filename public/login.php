<?php
require_once('inc/db.php');
require_once('inc/connection.php');

session_start();

if (isset($_POST['inputEmail'], $_POST['inputPassword'])) {
    $query = "SELECT username, password FROM users
    WHERE email=:email";

    $prepStatement = $db->prepare($query);

    $prepStatement->bindParam(':email', $_POST['inputEmail']);


    $prepStatement->execute();
    $user = $prepStatement->fetch();

    if (password_verify($_POST["inputPassword"], $user['password'])) {
        $_SESSION["username"] = $user['username'];
        header("Location: dashboard.php");
    } else {
        die(header("Location: index.html"));
    }
} else {
    die(header("Location: index.html"));
}

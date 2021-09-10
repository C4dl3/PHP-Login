<?php
require_once('inc/db.php');
require_once('inc/connection.php');


if (isset($_POST["inputEmail"], $_POST["inputPassword"], $_POST["inputUsername"])) {



    $query = "INSERT INTO  users (id, username, email, password)
    VALUES (DEFAULT, :user, :email, :pw)";

    $prepareStatement = $db->prepare($query);

    $prepareStatement->bindParam(':user', $_POST["inputUsername"]);
    $prepareStatement->bindParam(':email', $_POST["inputEmail"]);
    $prepareStatement->bindParam(':pw', password_hash($_POST["inputPassword"], PASSWORD_BCRYPT));

    $prepareStatement->execute();

    $db->exec($query);
    header("Location: index.html");
} else {
    die(header("Location: register.html"));
}

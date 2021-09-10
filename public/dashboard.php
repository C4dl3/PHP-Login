<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Success</title>
</head>

<body>
    <p>Welcome: <?php echo (htmlspecialchars($_SESSION['username'])) ?></p>
</body>

</html>
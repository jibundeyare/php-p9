<?php

session_start();

// vérification pour savoir si l'utilisateur est authentifié
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != true) {
    // redirection temporaire
    $url = '/login.php';
    header("Location: {$url}", 302);
    exit();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page privée</title>
</head>
<body>
    <h1>Page privée</h1>
    <p>
        <a href="/logout.php">se déconnecter</a>
    </p>
</body>
</html>
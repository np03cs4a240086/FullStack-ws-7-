<?php
session_start();

/* Redirect if not logged in */
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

/* Read theme cookie (default = light) */
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : "light";

/* Welcome message */
$message = "Welcome " . $_SESSION['username'];

/* Logout logic */
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <style>
        body {
            <?php if ($theme === "dark") { ?>
                background-color: black;
                color: white;
            <?php } else { ?>
                background-color: white;
                color: black;
            <?php } ?>
        }
    </style>
</head>
<body>

<h1><?= $message ?></h1>

<a href="preference.php">Change Theme</a>

<form method="post">
    <button type="submit" name="logout">Logout</button>
</form>

</body>
</html>
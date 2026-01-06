<?php
session_start();

/* Save theme preference */
if (isset($_POST['theme'])) {
    setcookie('theme', $_POST['theme'], time() + 86400 * 30); // 30 days
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Theme Preference</title>
</head>
<body>

<h2>Select Theme</h2>

<form method="post">
    <input type="radio" name="theme" value="light" checked> Light Mode<br>
    <input type="radio" name="theme" value="dark"> Dark Mode<br><br>
    <button type="submit">Save Preference</button>
</form>

</body>
</html>
<?php
if (isset($_GET['name'])) {
    $name = $_GET['name']; // No input sanitization
} else {
    $name = "Guest";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Example</title>
</head>
<body>
    <h2>Welcome, <?php echo $name; ?>!</h2> <!-- Vulnerable to XSS -->
    <form method="GET" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

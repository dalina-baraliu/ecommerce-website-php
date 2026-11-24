
<?php
// Database configuration example
// Copy this file to config.php and enter your local credentials.

$conn = mysqli_connect(
    "localhost",
    "YOUR_DB_USERNAME",
    "YOUR_DB_PASSWORD",
    "e-commerce"
);

if (!$conn) {
    die("Database connection failed.");
}
?>

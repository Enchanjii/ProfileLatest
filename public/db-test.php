<?php
/**
 * Database Connection Test
 * This script verifies that the MySQL database connection is working properly.
 * If MySQL is not running, it will display a clear error message.
 */

// Load Laravel's bootstrap file
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';

try {
    // Try to establish a database connection
    $app->make('db')->connection()->getPdo();

    echo "<h2 style='color: green; font-family: Arial, sans-serif;'>✓ Database Connection Successful</h2>";
    echo "<p style='font-family: Arial, sans-serif;'>";
    echo "<strong>Connection Type:</strong> " . config('database.default') . "<br>";
    echo "<strong>Host:</strong> " . config('database.connections.mysql.host') . "<br>";
    echo "<strong>Port:</strong> " . config('database.connections.mysql.port') . "<br>";
    echo "<strong>Database:</strong> " . config('database.connections.mysql.database') . "<br>";
    echo "<strong>User:</strong> " . config('database.connections.mysql.username') . "<br>";
    echo "</p>";
    echo "<p style='font-family: Arial, sans-serif; color: #666;'>MySQL is running and properly configured.</p>";

} catch (\Exception $e) {
    echo "<h2 style='color: red; font-family: Arial, sans-serif;'>✗ Database Connection Failed</h2>";
    echo "<p style='font-family: Arial, sans-serif; color: red;'><strong>Error:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p style='font-family: Arial, sans-serif; color: #666;'>";
    echo "Make sure MySQL is running in XAMPP and the credentials in your <code>.env</code> file are correct.";
    echo "</p>";

    http_response_code(500);
}
?>
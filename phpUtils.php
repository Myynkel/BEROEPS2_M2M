<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function databaseConnect ($databaseName) {
    $host = "localhost";
    $dbname = $databaseName;
    $user = $_ENV["DB_USER"];
    $password = $_ENV["DB_PASS"];

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}

function sanitizeInput ($input, $type) {
    $input = trim($input);

    switch ($type) {
        case 'number':
            if (is_numeric($input)) {
                return (int)$input;
            } else {
                return false;
            }

        case 'email':
            $sanitizedEmail = filter_var($input, FILTER_SANITIZE_EMAIL);
            if (!filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
                return false;
            } else {
                return $sanitizedEmail;
            }

        case 'date':
            $date = DateTime::createFromFormat('Y-m-d', $input);
            if ($date && $date->format('Y-m-d') === $input) {
                return $input;
            } else {
                return false;
            }

        case 'text':
            return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        default:
            return false;
    }
}
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use MongoDB\Client;
use MongoDB\Exception\Exception;

require "vendor/autoload.php";

try {
    $client = new Client("mongodb://localhost:27017");
    $db = $client->new_db;
    $collection = $db->users;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
        $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        if ($email === false || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Enter a valid email address";
        } else {
            // Check if user exists by querying the MongoDB collection
            $existingUser = $collection->findOne(["email" => $email]);

            if ($existingUser) {
                echo "User with this email already exists";
            } else {
                $insertResult = $collection->insertOne([
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email
                ]);

                if ($insertResult->getInsertedCount() === 1) {
                    echo "New user has been added";
                } else {
                    echo "Error occurred while adding new user";
                }
            }
        }
    } else {
        echo "Invalid request method";
    }
} catch (Exception $e) {
    echo "Error: " ;
}
?>













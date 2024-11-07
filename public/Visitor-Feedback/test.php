<?php

use MongoDB\Client;

require "vendor/autoload.php"; // Ensure this path is correct

// Connect to MongoDB Atlas
$client = new Client("mongodb+srv://galexport08:zZdWBtdOeXG6bg2M@zoo-project-cluster.qvl73.mongodb.net/user_feedback?retryWrites=true&w=majority");

// Select the database and collection
$db = $client->database; // This should match the database name you intend to use
$collection = $db->users; // This should match the collection name you intend to use

// Insert a test user
$insertUser = $collection->insertOne([
    'name' => 'John',
    'age' => 30,
    'email' => 'email@email.com',
]);

// Check if the user was inserted
if ($insertUser->getInsertedCount() === 1) {
    echo "User successfully inserted";
} else {
    echo "New user cannot be added to the database";
}
?>





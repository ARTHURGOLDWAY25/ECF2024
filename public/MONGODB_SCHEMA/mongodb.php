<?php

require "vendor/autoload.php";
use MongoDB\Client;

$client = new Client("mongodb://localhost:27017");
$db = $client->animal_db;
$collection = $db->animals; // Assuming 'animals' is the correct collection name

$insertData = $collection->insertMany([
    ["name" => "lion", "age" => 10, "views" => 1],
    ["name" => "turtle", "age" => 10, "views" => 0],
    ["name" => "elephant", "age" => 10, "views" => 0],
    ["name" => "penguin", "age" => 10, "views" => 0],
    ["name" => "dolphin", "age" => 10, "views" => 0],
    ["name" => "butterfly", "age" => 10, "views" => 0],
    ["name" => "gorilla", "age" => 10, "views" => 0],
    ["name" => "owl", "age" => 10, "views" => 0],
    ["name" => "snake", "age" => 10, "views" => 0],
    ["name" => "giraffe", "age" => 10, "views" => 0],
    ["name" => "leopard", "age" => 10, "views" => 0],
    ["name" => "zebra", "age" => 10, "views" => 0]
]);

if ($insertData->getInsertedCount() === count($insertData->getInsertedIds())) {
    echo "Data inserted successfully";
} else {
    echo "Failed to insert data";
}

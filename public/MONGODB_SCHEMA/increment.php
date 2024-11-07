<?php

use MongoDB\Client;
require "vendor/autoload.php";

try {
    $client = new Client("mongodb://localhost:27017");
    $db = $client->animal_db;
    $collection = $db->animals;

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $animalName = $_POST["animal"] ?? null;

        if($animalName){
            $result = $collection->updateOne(
                ["name" => $animalName],
                ['$inc' => ["views" => 1]]
            );

            if($result->getModifiedCount() > 0){
                echo "Views for '{$animalName}' have been successfully incremented by 1 ";

            }else{
                echo "Could not increment animal views. No matching document found or the views were already at the target value.";
            }

        }else{
            echo "animal data empty.";
        }

    } else {
        echo "Invalid request method. Please use POST.";
    }

} catch (Exception $e) {
    echo "Could not create or connect to database." .$e->getmessage();
}


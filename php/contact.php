<?php

$servername = 'localhost';
$dbname = 'contact_zoo';
$username = 'root';
$userpassword = 'root';

try {
    // create new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $userpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
        $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
        $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
        $textarea = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_SPECIAL_CHARS);

        // validate correct email format
        if ($email == false || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please enter valid data to submit.";
        } else {
            $sql_check = "SELECT COUNT(*) FROM contact_zoo WHERE email_contact = :email_contact";
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check->bindParam(':email_contact', $email);
            $stmt_check->execute();
            $row_count = $stmt_check->fetchColumn();

            if ($row_count > 0) {
                echo "User email already in use. Choose another email.";
            } else {
                // Prepare the SQL statement for inserting new user
                $sql_insert = "INSERT INTO contact_zoo(first_name, last_name, phone_contact, category, email_contact, textarea) 
                               VALUES (:first_name, :last_name, :phone_contact, :category, :email_contact, :textarea)";
                $stmt_insert = $pdo->prepare($sql_insert);
                $stmt_insert->bindParam(':first_name', $first_name);
                $stmt_insert->bindParam(':last_name', $last_name);
                $stmt_insert->bindParam(':phone_contact', $phone);
                $stmt_insert->bindParam(':category', $category);
                $stmt_insert->bindParam(':email_contact', $email);
                $stmt_insert->bindParam(':textarea', $textarea);

                // Execute the insert statement
                if ($stmt_insert->execute()) {
                    header('Location: zoo_contact_confirmation.php');
                    exit;
                } else {
                    $errorInfo = $stmt_insert->errorInfo();
                    echo "Error: unable to create record. Error info: " . print_r($errorInfo, true);
                }
            }
        }
    }
} catch (PDOException $e) {
    echo "Connection to server failed: " . $e->getMessage();
}
?>

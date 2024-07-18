<?php
ob_start(); // Start output buffering

// Database connection using PDO
$servername = 'localhost';
$dbname = 'join_ecosystem';
$username = 'root';
$userpassword = 'root';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $userpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        // Sanitize inputs
        $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        // Validate email
        if ($email === false || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email address.";
        } else {
            // Check if user email exists already
            $sql_check = "SELECT COUNT(*) FROM visitors WHERE email_user = :email_user";
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check->bindParam(':email_user', $email);
            $stmt_check->execute();
            $row_count = $stmt_check->fetchColumn();

            if ($row_count > 0) {
                echo "User with this email already exists. Please use a different email address.";
            } else {
                // Prepare the SQL statement for inserting new user
                $sql_insert = "INSERT INTO visitors (first_name, last_name, email_user) VALUES (:first_name, :last_name, :email_user)";
                $stmt_insert = $pdo->prepare($sql_insert);
                $stmt_insert->bindParam(':first_name', $first_name);
                $stmt_insert->bindParam(':last_name', $last_name);
                $stmt_insert->bindParam(':email_user', $email);

                // Execute the insert statement
                if ($stmt_insert->execute()) {
                    header('Location: confirmation.php');
                    exit; // Ensure no further code is executed
                } else {
                    $errorInfo = $stmt_insert->errorInfo();
                    echo "Error: Unable to create record. Error info: " . print_r($errorInfo, true); // Output error message for debugging
                }
            }
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); // Output connection error for debugging
}

ob_end_flush(); // End output buffering and send output
?>








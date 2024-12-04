<?php

// include database connection
include 'db.php';

// Capture values from form
$username = $_POST['username'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

try {
    // Insert user data into the database using a prepared statement
    $sql = "SELECT username, password FROM user WHERE username = :username";
    $stmt = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    // Execute the statement
    $stmt->execute([
        'username' => $username
    ]);
    $result = $stmt->fetchAll();
    // echo $result['username'];

    // echo $hashed_password;
    print_r($result);
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
<?php

// start session
session_start();

// if session user does not exist
if( empty($_SESSION['user']) ) {
    header('Location: login.php');
    exit();
}

// otherwise set user
$user = $_SESSION['user'];
print_r($user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome <?php echo ucfirst($user['name']); ?></h1>
    <h5>Timeline</h5>
    <ul>
        <li>User Post 1</li>
        <li>User Post 1</li>
        <li>User Post 1</li>
    </ul>

    <a href="logout.php">Logout</a>
</body>
</html>
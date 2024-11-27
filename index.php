<?php
// Set database credentials
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "im101_a";

// catch the form values
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

try {
    // create a new connection instance
    $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // execute query
    if ($name) {
        // construct your sql statement
        $sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";

        // execute
        echo $conn->exec($sql);
        echo "NEW RECORD ADDED";
    }

} catch(PDOException $e) {
    
    echo "Connection failed: " . $e->getMessage();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Registration</h1>
    <form action="" method="post">
        <label>Name:</label>
        <input type="text" name="name" /><br />
        <label>Username:</label>
        <input type="text" name="username" /><br />
        <label>Password:</label>
        <input type="password" name="password" /><br />
        <input type="submit" value="submit" />
    </form>
</body>
</html>
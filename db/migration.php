<?php
$config = require __DIR__ . '/../config.php';

$servername = $config['host'];
$username = $config['username'];
$password = $config['password'];
$database = $config['database'];


$conn = new PDO("mysql:host=$servername", $username, $password);

try {
    $sql = "CREATE DATABASE $database";
    $conn->exec($sql);
    echo "Database created successfully" . PHP_EOL;
    $conn->query("use $database");

    $sql = "CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        full_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255),
        reg_date TIMESTAMP
    )";
    $exp="CREATE TABLE experience (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        job VARCHAR(255) NOT NULL,
        year int NOT NULL,
        skill VARCHAR(255)
        
    )";
    $skill="CREATE TABLE skill (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        skill VARCHAR(255) NOT NULL,
        level VARCHAR(255) NOT NULL,
        
    )"

    ;

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table \"users\" created successfully" . PHP_EOL;

    $conn->exec($exp);
    echo "Table \"experience\" created successfully" . PHP_EOL;
    $conn->exec($skill);
    echo "Table \"skill\" created successfully" . PHP_EOL;
    $sql = "INSERT INTO users (full_name, email, password, reg_date)
    VALUES ('John Doe', 'admin@example.com', '" . password_hash('admin', PASSWORD_BCRYPT) . "', " . time() . ")";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "User \"admin\" was inserted into database" . PHP_EOL;

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
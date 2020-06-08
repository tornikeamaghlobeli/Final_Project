<?php

namespace app\db;

class Database
{
    /**
     * @var \PDO
     */
    public $pdo;

    public function __construct()
    {
        $config = require __DIR__ . '/../config.php';
        $servername = $config['host'];
        $username = $config['username'];
        $password = $config['password'];
        $database = $config['database'];

        $this->pdo = new \PDO("mysql:host=$servername;dbname=$database", $username, $password);
    }

    public function login($email, $password, &$user = null)
    {
        $statement = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindValue(':email', $email);
        $statement->execute();
        $user = $statement->fetch(\PDO::FETCH_ASSOC);
        if (!$user) {
            return [false, 'User does not exist'];
        }
        if (!password_verify($password, $user['password'])) {
            return [false, 'Password is incorrect'];
        }

        return [true, ''];
    }
}
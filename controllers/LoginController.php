<?php

namespace app\controllers;

use app\IRequest;
use app\Router;
use mysqli;

class LoginController
{
    public function renderLogin(IRequest $request, Router $router)
    {
        $router->layout = 'login_layout';
        return $router->renderView('login');
    }

    public function login(IRequest $request, Router $router)
    {
        $data = $request->getBody();
        list($success, $message) = $router->database->login($data['email'], $data['password'], $user);
        if ($success) {
            $_SESSION['currentUser'] = $user;
            header('Location: /');
            exit;
        }
        return $router->renderView('login', [
            'errorMessage' => $message,
            'data' => $data
        ]);
    }

    public function logout(IRequest $request)
    {
        session_destroy();
        header('Location: ' . $request->httpReferer);
        exit;
    }

    public function registration(IRequest $request, Router $router)
    {
        $data = $request->getBody();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "framework_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $error = '';
        $username = $data["username"];
        $email = $data["email"];
        if ($data['password'] !== $data['password_confirm']) {
            $error = "password and password confirm are not equal";
        } else {
            $password = password_hash($data["password"], PASSWORD_BCRYPT);
            $time = time();
            $sql = "INSERT INTO users (full_name, email, password) VALUES ('$username','$email','$password')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        return $router->renderView('layout', [
            'error' => $error
        ]);
    }
}
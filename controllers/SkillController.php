<?php


namespace app\controllers;


use app\IRequest;
use app\Router;
use mysqli;

class SkillController
{



    public static $row=[];
    public function skills(IRequest $request, Router $router)
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

            $skill = $data["skill"];
            $level = $data["level"];


            $sql = "INSERT INTO skill (id, skill, level) VALUES ('$skill','$level')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

            return $router->renderView('skills', [
                'error' => $error

            ]);
    }


            public function getSkills(IRequest $request, Router $router)
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

                $sql = "SELECT * FROM skill";

                if ($conn->query($sql) === TRUE) {
                    echo "successfully Selected";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $row = $conn->query($sql)->fetch_assoc();

                $conn->close();

                return $router->renderView('skills', [
                    'row' => $row
                ]);
            }

    }



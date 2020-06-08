<?php


namespace app\controllers;
use app\IRequest;
use app\Router;
use mysqli;

class ExperienceController

{

    public static $row = [];



    public function experience(IRequest $request, Router $router){

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
        $job = $data["job"];
        $year = $data["year"];
        $position = $data["position"];
//        $skill = $data["skill"];


            $sql = "INSERT INTO experience (job, year, position) VALUES ('$job','$year','$position')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

        return $router->renderView('experience', [
            'error' => $error

        ]);
    }
        public function getExperience(IRequest $request, Router $router){

            $data = $request->getBody();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "framework_db";

            $conn = new mysqli($servername, $username, $password, $dbname);


            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM experience";

            if ($conn->query($sql) === TRUE) {
                echo "successfully Selected";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $row = $conn->query($sql)->fetch_assoc();

            $conn->close();

            return $router->renderView('experience', [
                'row' => $row
            ]);
        }


    }

<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/helpers.php';

use app\controllers\HomeController;
use app\controllers\LoginController;
use app\Router;
use app\Request;
use app\db\Database;

session_start();
$database = new Database();


$router = new Router(new Request(), $database);

$router->get('/', 'index');

$router->get('/about', [HomeController::class, "private"]);
$router->get('/experience', [\app\controllers\ExperienceController::class, 'getExperience']);
$router->get('/education', 'education');
$router->get('/login', 'login');
$router->get('/registration_form', 'registration_form');
$router->post('/login', [LoginController::class, 'login']);
$router->post('/registration', [LoginController::class, 'registration']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/exp_form',"exp_form");
$router->post('/experience',[\app\controllers\ExperienceController::class, 'experience' ]);
$router->get('/skills', [\app\controllers\SkillController::class,'getSkills']);
$router->post('/skills', [\app\controllers\SkillController::class,'skills']);

$router->get('/contact', [HomeController::class, 'contact']);
$router->post('/contact', [HomeController::class, 'postContact']);
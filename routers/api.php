<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\QuizController;
use Src\Router;

$router = new Router();

Router::post('/api/register',[UserController::class, 'store']);
Router::post('/api/login',[UserController::class, 'login']);
//Router::post('/api/quizzes',[QuizController::class, 'store']);

echo "Rout not found";
Router::post('/api/logout',[UserController::class, 'logout']);
Router::notFound();
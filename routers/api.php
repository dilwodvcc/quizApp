<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\QuizController;
use Src\Router;

$router = new Router();

Router::get('/api/users/getInfo',[UserController::class, 'show'], 'auth:api');

Router::post('/api/quizzes',[QuizController::class, 'store'], 'auth:api');
Router::get('/api/quizzes',[QuizController::class, 'index'], 'auth:api');
Router::delete('/api/quizzes/{id}',[QuizController::class, 'destroy'], 'auth:api');
Router::put('/api/quizzes/{id}',[QuizController::class, 'update'], 'auth:api');


Router::post('/api/register',[UserController::class, 'store']);
Router::post('/api/login',[UserController::class, 'login']);
Router::post('/api/logout',[UserController::class, 'logout']);

Router::notFound();
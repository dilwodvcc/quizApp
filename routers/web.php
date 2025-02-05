
<?php

use App\Http\Controllers\WEB\HomeController;
use App\Http\Controllers\WEB\OtherController;
use App\Http\Controllers\WEB\QuizController;
use App\Models\User;
use Src\Router;


$user = new User();

Router::get('/show', [OtherController::class, 'show']);
Router::get('/delete/{id}',[OtherController::class, 'delete']);

Router::get('/', [HomeController::class,  'home']);
Router::get('/login',[HomeController::class, 'login']);
Router::get('/register',[HomeController::class, 'register']);
Router::get('/about', [HomeController::class,  'about']);
Router::get('/add-quiz', [HomeController::class,  'add_quiz']);
Router::get('/create-quiz', [HomeController::class,  'create_quiz']);
Router::get('/dashboard', [HomeController::class,  'dashboard']);
Router::get('/my-quizzes', [HomeController::class,  'my_quizzes']);
Router::get('/statistics', [HomeController::class,  'statistics']);
Router::get('/how-it-works', [HomeController::class,  'how_it_works']);
Router::get('/features', [HomeController::class,  'features']);
Router::get('/quizzes/{id}/update', [HomeController::class,  'update']);
//quizzes
Router::get('/take-quiz/{id}', [QuizController::class,  'take_quiz']);
Router::notFound();
<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\WEB\HomeController;
use App\Models\User;
use Src\Router;


$user = new User();
Router::get('/show', [OtherController::class, 'show']);
Router::get('/delete/{id}',[OtherController::class, 'delete']);
Router::get('/users', [UserController::class, 'index']);


Router::get('/', [HomeController::class,  'home']);
Router::get('/login',[HomeController::class, 'login']);
Router::get('/register',[HomeController::class, 'register']);
Router::get('/about', [HomeController::class,  'about']);
Router::get('/add-quiz', [HomeController::class,  'addquiz']);
Router::get('/create-quiz', [HomeController::class,  'createquiz']);
Router::get('/dashboard', [HomeController::class,  'dashboard']);
Router::get('/my-quizzes', [HomeController::class,  'myquizzes']);
Router::get('/statistics', [HomeController::class,  'statistics']);
Router::get('/how-it-works', [HomeController::class,  'howitworks']);
Router::get('/features', [HomeController::class,  'features']);
//Router::get('/todos/{id}', callback: function ($id){
//    (new Controllers\OtherController)->delete($id);
//});

//dd($user->getUser("abdul@gmail.com",'123456'));
//dd($user->createUser("Fazliddinov Abdulloh","abdulloh207@gmail.com",'123456'));
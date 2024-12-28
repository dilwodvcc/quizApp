<?php

use App\Http\Controllers\OtherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewsController;
use Src\Router;
use App\Models\User;


$user = new User();
Router::get('/show', [OtherController::class, 'show']);
Router::get('/delete/{id}',[OtherController::class, 'delete']);
Router::get('/users', [UserController::class, 'index']);


Router::get('/', [ViewsController::class,  'home']);
Router::get('/login',[ViewsController::class, 'login']);
Router::get('/register',[ViewsController::class, 'register']);


//Router::get('/todos/{id}', callback: function ($id){
//    (new Controllers\OtherController)->delete($id);
//});

//dd($user->getUser("abdul@gmail.com",'123456'));
//dd($user->createUser("Fazliddinov Abdulloh","abdulloh207@gmail.com",'123456'));
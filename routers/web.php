<?php

use App\Http\Controllers\OtherController;
use App\Http\Controllers\UserController;
use Src\Router;
use App\Models\User;


$user = new User();
//dd($user->getUser("abdul@gmail.com",'123456'));
//dd($user->createUser("Fazliddinov Abdulloh","abdulloh207@gmail.com",'123456'));
Router::get('/todos', [OtherController::class, 'show']);
Router::get('/delete/{id}',[OtherController::class, 'delete']);
//Router::get('/todos/{id}', callback: function ($id){
//    (new Controllers\OtherController)->delete($id);
//});
Router::get('/users', [UserController::class, 'index']);
Router::get('/', function (){
    echo 'Hello World';
});

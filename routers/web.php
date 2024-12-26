<?php

use App\Controllers\OtherController;
use App\Controllers\UserController;
use App\Models\User;
use Sourse\Router;


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

<?php

namespace App\Controllers;

use App\Models\User;
use App\Traits\Validator;
use JetBrains\PhpStorm\NoReturn;

class UserController{
    use Validator;
    #[NoReturn] public function store(): void
    {
        $userData = $this->validate([
            'full_name' => 'string',
            'email' => 'string',
            'password' => 'string'
        ]);
        $user = new User();
        $user->createUser($userData['full_name'], $userData['email'], $userData['password']);
        apiResponse(['message' => 'User created!'],200);
    }
}